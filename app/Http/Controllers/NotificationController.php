<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\OffersNotification;

class NotificationController extends Controller
{
    
    
    public function sendOfferNotification() {
        $email = "pravin@vivanshinfotech.com";
        $offerData = [
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];
        Notification::route('mail', $email)->notify(new OffersNotification($offerData));
        dd('OffersNotification SuccessFully sent..........');
    }
}