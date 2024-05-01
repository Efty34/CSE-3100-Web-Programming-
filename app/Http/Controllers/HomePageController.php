<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use App\Models\League;
use App\Models\Message;
use App\Models\Players;
use App\Models\EplClubs;
use App\Models\Products;

use App\Models\UserPlayer;
use App\Models\LaLigaClubs;
use App\Models\SeriaAClubs;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use App\Models\BundesLigaClubs;
use Illuminate\Support\Facades\Auth;


class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function showProfile()
    // {
    // $user = Auth::user();

    // // Check if $user is not null and is a model instance
    // if ($user && $user instanceof \Illuminate\Database\Eloquent\Model) {
    //     $user->load('players');  // Eager load the 'players' relationship

    //     return view('homepage.user-profile', ['user' => $user]);
    // } else {
    //     // Handle cases where $user is null or not a model instance
    //     return redirect()->route('login')->with('error', 'You need to be logged in to view the profile.');
    // }
    // $user = Auth::user(); // Ensure this is fetching the user

    // if (!$user) {
    //     return redirect()->route('login')->with('error', 'You must be logged in to view this page.');
    // }

    // $user->load('players'); // Load relations, if necessary

    // return view('homepage.user-profile', compact('user'));
    // }

    public function userProfilePage()
    {
        $user = Auth::user(); // Ensure this is fetching the user

        if (!$user) {
            return redirect()->route('login')->with('message', 'You must be logged in to view this page.');
        }

        // Ignore this, code will code
        $user->load('players');

        $products = Products::all();
        return view('homepage.user-profile', [
            'products' => $products,
            'user' => $user
        ]);
    }
    public function orderProducts(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'product_id' => 'required',
            'product_quantity' => 'required',
            'product_total_price' => 'required'
        ]);

        $order = new OrderProduct();
        $order->name = $request->name;
        $order->product_id = $request->product_id;
        $order->product_quantity = $request->product_quantity;
        $order->product_total_price = $request->product_total_price;

        $order->save();
        return redirect()->back()->with('message', 'Order placed successfully');
    }
    public function deleteOrder($id)
    {
        OrderProduct::destroy($id);
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Order Delivered Successfully');
    }
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $message->save();
        return redirect()->back()->with('message', 'Message sent successfully');
    }



    public function adminDashboard()
    {
        $players = Players::all();
        $la_liga_clubs = LaLigaClubs::all();
        $epl_clubs = EplClubs::all();
        $bundes_liga_clubs = BundesLigaClubs::all();
        $seria_a_clubs = SeriaAClubs::all();
        $products = Products::all();
        $orderproducts = OrderProduct::all();
        $messages = Message::all();
        $users = User::all();
        $leagues = League::with('clubs')->get();
        // $clubs = Club::all();

        return view('homepage.admin-dashboard', [
            'players' => $players,
            'la_liga_clubs' => $la_liga_clubs,
            'epl_clubs' => $epl_clubs,
            'bundes_liga_clubs' => $bundes_liga_clubs,
            'seria_a_clubs' => $seria_a_clubs,
            'products' => $products,
            'orderproducts' => $orderproducts,
            'messages' => $messages,
            'users' => $users,
            'leagues' => $leagues
            // 'clubs' => $clubs
            
        ]);
    }

    
    public function deleteMessage($id)
    {
        Message::destroy($id);
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Message deleted successfully');
    }

    
    public function addPlayerToProfile(Request $request)
    {
        $request->validate([
            'player_name' => 'required|string',
            'player_position' => 'required|string',
            'club_type' => 'required|string',
        ]);

        $user = Auth::user();
        UserPlayer::create([
            'user_id' => $user->id,
            'player_name' => $request->player_name,
            'player_position' => $request->player_position,
            'club_type' => $request->club_type
        ]);

        return redirect()->route('homepage.user-profile')->with('message', 'Player added to your Dream11 team!');
    }

    public function removePlayer(Request $request)
    {
        $request->validate([
            'player_name' => 'required|string',
            'player_position' => 'required|string',
        ]);

        $user = Auth::user();
        // Ignore this, code will code
        $player = $user->players()->where([
            ['player_name', '=', $request->player_name],
            ['player_position', '=', $request->player_position],
        ])->first();

        if ($player) {
            $player->delete();
            return back()->with('message', 'Player removed from your Dream11 !!!');
        }

        return back()->with('error', 'Player not found.');
    }
}
