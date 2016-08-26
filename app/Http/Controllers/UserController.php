<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Facebook;
use FacebookRedirectLoginHelper;
use FacebookSDKException;
use Illuminate\Support\Facades\Route;
class UserController extends Controller
{
    /**
     * [ Show all users on blog ]
     * @return [view] [list]
     */
    public function show(){
        $users = User::all();
        return view('user.list', compact('users'));
    }

    
    /**
     * [Create user function, return a creation blade]
     * @return [view] [create]
     */
    public function create(){
        return view('user.create');
    }

    /**
     * [store on DB with validation]
     * @param  UserRequest $request [request from users]
     * @return [redirect]               [users/create]
     */
    public function store(UserRequest $request){
        // check some condition
        if( $request->get('password') != $request->get('rpassword')){
            return redirect('users/create');
        }
        if( $request->get('username') == 'Fizz'){
            $role = 'admin';
        } else $role = 'member';
        //validation and create
        User::create([
            'username'   => $request->get('username'),
            'password'   => Hash::make($request->get('password')),
            'email'      => $request->get('email'), 
            'role'       => $role,
            'facebookId' => $request->get('facebookId'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('users/show');
    }

    /**
     * [finding user to send data to edit]
     * @param  [int] $id [id of user]
     * @return [view]     [edit]
     */
    public function edit($id){
        $user = User::where('user_id', $id)->firstOrFail();
        return view('user.edit', compact('user'));
    }

    /**
     * [finding user to update data from request]
     * @param  UserRequest $request [request from user]
     * @param  [id]      $id      [id of user]
     * @return [redirect]               [users/show]
     */
    public function update(UserRequest $request, $id){
        $user = User::where('user_id', $id)->firstOrFail();
        $user->username = $request->get('username');
        $user->password = Hash::make($request->get('password'));
        $user->email = $request->get('email');
        $user->save();
        return redirect('users/show');
    }

    /**
     * [testDispatch and test making request description]
     * @return [type] [description]
     */
    public function testDispatch(){
        $data = [
            '_token'     => csrf_token(),
            'username'   => 'Crocodile',
            'password'   => '123456789',
            'rpassword'   => '123456789',
            'email'      =>'123456789@gmail.com', 
            'facebookId' => '123456789',
        ];

        $request  = UserRequest::create('users/create', 'POST', $data);
        $response = Route::dispatch($request);
        $this->store($request);
        return redirect('users/show');
    }

    public function loginWithFb(){
        
    }
    /**
     * [registerWithFb description]
     * @return [type] [description]
     */
    public function registerWithFb(){
        session_start();
        // init app with app id and secret
        $fb = new Facebook\Facebook([
            'app_id' => '1150786978348749', 
            'app_secret' => '20f037495a075998faf48494dedc37ae',
            'default_graph_version' => 'v2.2',
        ]);

        // login helper with redirect_uri
        $permissions = ['email', 'user_likes']; // optional
        $helper = $fb->getRedirectLoginHelper('http://madhub.me/users/freg', $permissions);
        
        // try to get tokens
        try {
            $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        if (! isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                $loginUrl = $helper->getLoginUrl('http://madhub.me/users/freg', $permissions);
                header('Location: '.$loginUrl);
            }
            exit;
        }

        // Logged in
        echo '<h3> You are having a Access Token</h3>';
        var_dump($accessToken->getValue());

        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();

        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        echo '<h3>Metadata</h3>';
        var_dump($tokenMetadata);

        // Get user information
        try{    
            $response = $fb->get('/me?fields=name,email,first_name,last_name', $accessToken);
        } catch(Facebook\Exceptions\FacebookResponseException $e){
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e){
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $userGraph = $response->getGraphUser();

        echo '</br>Name: ' . $userGraph->getName();
        echo '</br>Id: ' . $userGraph->getId();
        echo '</br>Email: ' . $userGraph->getEmail();
        var_dump(
            $userGraph->getField('email')
        );
        // Create new user model
        $user             = new User();
        $user->username   = $userGraph->getName();
        $user->email      = $userGraph->getEmail();
        $user->facebookId = $userGraph->getId();
        return view('user.create', compact('user'));

    }

    
}



























/*TRASH */

/*        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId('1150786978348749'); // Replace {app-id} with your app id
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();

        if (! $accessToken->isLongLived()) {
          // Exchanges a short-lived access token for a long-lived one
          try {
            $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
          } catch (Facebook\Exceptions\FacebookSDKException $e) {
            echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
            exit;
          }

          echo '<h3>Long-lived</h3>';
          var_dump($accessToken->getValue());
        }

        $_SESSION['fb_access_token'] = (string) $accessToken;

        // User is logged in with a long-lived access token.
        // You can redirect them to a members-only page.
        //header('Location: https://example.com/members.php');
*/