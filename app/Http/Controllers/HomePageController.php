<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Players;
use App\Models\EplClubs;
use App\Models\Products;
use App\Models\LaLigaClubs;
use App\Models\SeriaAClubs;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use App\Models\BundesLigaClubs;

class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function userProfilePage()
    {
        $products = Products::all();
        return view('homepage.user-profile',[
            'products' => $products
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
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Order Delivered SUccessfully');
    }
    public function sendMessage(Request $request){
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



    public function adminDashboard(){
        $players = Players::all();
        $la_liga_clubs = LaLigaClubs::all();
        $epl_clubs = EplClubs::all();
        $bundes_liga_clubs = BundesLigaClubs::all();
        $seria_a_clubs = SeriaAClubs::all();
        $products = Products::all();
        $orderproducts = OrderProduct::all();
        $messages = Message::all();
        
        return view('homepage.admin-dashboard', [
            'players' => $players,
            'la_liga_clubs' => $la_liga_clubs,
            'epl_clubs' => $epl_clubs,
            'bundes_liga_clubs' => $bundes_liga_clubs,
            'seria_a_clubs' => $seria_a_clubs,
            'products' => $products,
            'orderproducts' => $orderproducts,
            'messages' => $messages
        ]);
    }

    public function deleteMessage($id){
        Message::destroy($id);
        return redirect()->route('homepage.admin-dashboard')->with('message', 'Message deleted successfully');
    }
}
