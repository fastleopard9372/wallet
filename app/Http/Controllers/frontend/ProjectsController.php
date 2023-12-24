<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Banners;
use App\Models\Account;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Wallet_control;
use App\Models\Withraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    // Projects Page
    public function index(Request $request)
    {
        return view('frontend.projects');
    }

    public function detail_rec(Request $request)
    {
        return view('frontend.projects.detail_rec');
    }

    public function aibot(Request $request)
    {
        return view('frontend.projects.aibot');
    }

    public function nft(Request $request)
    {
        return view('frontend.projects.nft');
    }

    public function foxpay(Request $request)
    {
        return view('frontend.projects.detail.foxpay');
    }

    public function future_trades(Request $request)
    {
        return view('frontend.projects.detail.future_trades');
    }

    public function netmi(Request $request)
    {
        return view('frontend.projects.detail.netmi');
    }

    public function xedmex(Request $request)
    {
        return view('frontend.projects.detail.xedmex');
    }

    public function trade24(Request $request)
    {
        return view('frontend.projects.detail.trade24');
    }

    public function gminer(Request $request)
    {
        return view('frontend.projects.detail.gminer');
    }

    public function charge_spot(Request $request)
    {
        return view('frontend.projects.detail.charge_spot');
    }

    public function newpoint(Request $request)
    {
        return view('frontend.projects.detail.newpoint');
    }

    public function noreview(Request $request)
    {
        return view('frontend.projects.detail.noreview');
    }

    public function quopi(Request $request)
    {
        return view('frontend.projects.detail.quopi');
    }

    public function eyen(Request $request)
    {
        return view('frontend.projects.detail.eyen');
    }

    public function centrium(Request $request)
    {
        return view('frontend.projects.detail.centrium');
    }

    public function eggzomania(Request $request)
    {
        return view('frontend.projects.detail.eggzomania');
    }

    public function cloud_computing(Request $request)
    {
        return view('frontend.projects.detail.cloud_computing');
    }

    public function memeseason(Request $request)
    {
        return view('frontend.projects.detail.memeseason');
    }

    public function nexium(Request $request)
    {
        return view('frontend.projects.detail.nexium');
    }

    public function banterbits(Request $request)
    {
        return view('frontend.projects.detail.banterbits');
    }

    public function bitlotto(Request $request)
    {
        return view('frontend.projects.detail.noreview');
    }

    public function planetary_asset(Request $request)
    {
        return view('frontend.projects.detail.planetary_asset');
    }

    public function intelid(Request $request)
    {
        return view('frontend.projects.detail.intelid');
    }

    public function wintonfinance(Request $request)
    {
        return view('frontend.projects.detail.wintonfinance');
    }

    public function alien_limited(Request $request)
    {
        return view('frontend.projects.detail.alien_limited');
    }

    public function city_trade_market(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function slotsmarket(Request $request)
    {
        return view('frontend.projects.detail.slotsmarket');
    }

    public function galacti_cash(Request $request)
    {
        return view('frontend.projects.detail.galacti_cash');
    }

    public function minebubbl(Request $request)
    {
        return view('frontend.projects.detail.minebubble');
    }

    public function giogame(Request $request)
    {
        return view('frontend.projects.detail.giogame');
    }

    public function royalq(Request $request)
    {
        return view('frontend.projects.detail.royalq');
    }

    public function xland(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function ufmaa(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function elixxon(Request $request)
    {
        return view('frontend.projects.detail.elixxon');
    }

    public function cointech2u_bot(Request $request)
    {
        return view('frontend.projects.cointech2u');
    }

    public function spectaapp(Request $request)
    {
        return view('frontend.projects.detail.spectaapp');
    }

    public function x_weeks(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function excelsiar(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function nine_chronicles(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function mobox(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function bnb_mario(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function timicity(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function skyark_chronicles(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function air_ntfs(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function tap_fantasy(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function alien_worlds(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function splinterlands(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function cryptoblades(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function axie_infinity(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function google_car(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function polygonum(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function illuvium(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function wizardia(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function sidus_hehoes(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function gods_unchained(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function guildofguardians(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function sandbox_game(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function gold_fever(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function pvu_farmland(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function nft_champions(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function tat_space(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function kryll(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function stoic(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function quadency(Request $request)
    {
        return view('frontend.projects.detail.quadency');
    }

    public function apollo_bot(Request $request)
    {
        return view('frontend.projects.noreview');
    }

    public function gunbot_com(Request $request)
    {
        return view('frontend.projects.detail.gunbot');
    }

    public function olymp_robot(Request $request)
    {
        return view('frontend.projects.detail.olympbot');
    }

    public function u_trading(Request $request)
    {
        return view('frontend.projects.detail.utrading');
    }

    public function bigul(Request $request)
    {
        return view('frontend.projects.detail.bigul');
    }

    public function bots_io(Request $request)
    {
        return view('frontend.projects.detail.botsio');
    }

    public function threecommas(Request $request)
    {
        return view('frontend.projects.detail.commas');
    }

    public function trality(Request $request)
    {
        return view('frontend.projects.detail.trality');
    }

    public function cornix(Request $request)
    {
        return view('frontend.projects.detail.cornix');
    }

    public function crypto_hopper(Request $request)
    {
        return view('frontend.projects.detail.crypto_hopper');
    }

    public function coin_rules(Request $request)
    {
        return view('frontend.projects.detail.coin_rule');
    }

    public function smard(Request $request)
    {
        return view('frontend.projects.detail.smard');
    }

    public function zigdao(Request $request)
    {
        return view('frontend.projects.detail.zigdao');
    }

    public function tradeSanta(Request $request)
    {
        return view('frontend.projects.detail.tradesanta');
    }

    public function arbitrage_scanner(Request $request)
    {
        return view('frontend.projects.detail.arbitragescanner');
    }

    public function pionex(Request $request)
    {
        return view('frontend.projects.detail.pionex');
    }
}
