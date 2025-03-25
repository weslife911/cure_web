<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileDisplayController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function gce() {
        $files = [
            "https://mega.nz/file/Mt4ghaxD#60giwH_4nT7D_fACQYnQX_JVCsD5ReS3Lu6ln5OBMks",
            "https://mega.nz/file/ZtQyGKiL#pVC6pCUOHgVI3nMmEw2ekUI4XLGhunGV9RxPbl5U3b0",
            "https://mega.nz/file/c1ZhVA4A#By3adVn5w0tq_Lrwo6173Mx9GoBSkk54rrD7bRpWvCA",
            "https://mega.nz/file/Z4hDHYZT#L8vxXjrvOsIAjNZqfb288RDE-feOEABi6n8w8v3AsI4"
        ];

        return view("verified.gce", compact(["files"]));
    }

    public function ca(Request $request) {

        $files = [];
        $message = "";
        $file_url = "";
        $payment_url = "https://link.tranzak.net/SoYC137shxfTTydx6";

        if(Auth::user()->field_of_study === "Engineering") {
            $files = [
                "https://mega.nz/file/x5oAnTjB#hb2aJPklXYOYRtR2ZBtfvrPANA23f4HtaTPXXIiqvBc",
                "https://mega.nz/file/l4JXWD7R#97NN-Y_mlP5_PpbxK026BNTDwYmWaBcD-ZbQQ6X-b8A",
                "https://mega.nz/file/5tZH0RjD#ugOmO4Ylc9WGJCrgj3y3P3L9by_9ZUyf2SxZn4oVq74",
                "https://mega.nz/file/Mow00TwK#_9IX-7AYEBXD7F31KIpI5e7rED5eDa1Z6VZ5BQ3YoT0",
                "https://mega.nz/file/AppnWI7Q#aLo-faFvuQTctMqk-FGkH2rAR4X5JGyk480IbIJOODs",

            ];
        } else {
            $files = [
                "https://mega.nz/file/Bp5TnKCJ#7sHYR-_yPwzW0pxWi7wqr_ei3MziSjUjQf9QcHeAtz4",
                "https://mega.nz/file/tkJyEb4B#GZ6En7QPJLM9OwGwSRfBwAfB7AjNy6YrafDPYUWGyno",
                "https://mega.nz/file/lhoklSBa#jm8NmRfdsd69jMEI-Uo1zgS0ShxzBNsTU5hrdguahCE",
                "https://mega.nz/file/I8xQAAYQ#EwfIrf3yYswzlexPf8PQ4cXlr6IkhgHmYf04-_b3koU",
                "https://mega.nz/file/Z4JxwCSS#x76N821foeR7AoeDxtJJ3iNTIHozlJkgCaKaSajV-FA",
                "https://mega.nz/file/cpZTABob#69091uzpawZarZPRRopYggSQqjzsnJErGnYapIjHLf4",
                "https://mega.nz/file/1gx2RJiQ#A3utW0Xgto54tvP4kHn8sq-R-6_oGx7LqJlmEk7xn6Q"
            ];
        }

        if(Auth::user()->amount === 0) {
            $files = [];
            $message = "Pay tuition fees to have access to all files";
        } elseif(Auth::user()->amount > 0 && Auth::user()->amount <= 10000) {
            $files = collect($files)->take(2);
            $message = "Complete tuition fees to get access to all files";
        } elseif(Auth::user()->amount > 10000 && Auth::user()->amount <= 20000) {
            $files = collect($files)->take(3);
            $message = "Complete tuition fees to get access to all files";
        } elseif(Auth::user()->amount > 20000 && Auth::user()->amount <= 30000) {
            $files = collect($files)->take(4);
            $message = "Complete tuition fees to get access to all files";
        } else {
            $files = collect($files)->take(count($files));
        }




        return view("verified.ca", compact(["message", "files", "payment_url"]));
    }

    public function revision() {

        $files = [];
        $message = "";
        $file_url = "";
        $payment_url = "https://link.tranzak.net/SoYC137shxfTTydx6";

        if(Auth::user()->field_of_study === "Engineering") {
            $files = [
                "https://mega.nz/file/EoBgSISR#tdYojb2AQ_2UMfPRIOYdo7JlLqlIoz7uNphjK6WQxrE"
            ];
        } else {
            $files = [
                "https://mega.nz/file/sowlBaiS#M5gUQk3r7yveZGXDKhPFt0zi4kjCIqDqh-3U_3EuNnc",
                "https://mega.nz/file/EoBgSISR#tdYojb2AQ_2UMfPRIOYdo7JlLqlIoz7uNphjK6WQxrE",
                "https://mega.nz/file/Fhx0hA6C#IRmNg0yvXWs1rM2DH-_K-0KXEs1IMH0u7Wm_-JpBpbs",
                "https://mega.nz/file/U1QEyJAY#YSjCGBmYBqsMzikMdyyYk4XCTcEobmRt06HWsQOAZAU",
                "https://mega.nz/file/5ow2AKxI#rIz3IFjyWLjsVxuQvKavog10jejkDBIJan_-CFzp8f0"
            ];
        }


        if(Auth::user()->amount === 0) {
            $files = [];
            $message = "Pay tuition fees to have access to all files";
        } elseif(Auth::user()->amount > 0 && Auth::user()->amount <= 30000) {
            $files = collect($files)->take(1);
            $message = "Complete tuition fees to get access to all files";
        } else {
            $files = collect($files)->take(count($files));
        }


        return view("verified.revision", compact(["message", "files", "payment_url"]));
    }

    public function notes() {
        $files = [];
        $message = "";
        $file_url = "";
        $payment_url = "https://link.tranzak.net/SoYC137shxfTTydx6";

        if(Auth::user()->field_of_study === "Engineering") {
            $files = [];
        } else {
            $files = [
                "https://mega.nz/file/wxQkxZjQ#kxFV0DstEBS0JA5JMiVlkeq86sSf5cdhD5OhNC8rK_U",
                "https://mega.nz/file/01YTmCRI#CF5Qbm8jqhsZRk2sXAgkDzPAECszbYymOn129uzU14A",
                "https://mega.nz/file/o4BhSTAI#ejV8KRrePcWZSdYSuwZh1Au0eHbcXuZx2JwDFJTcov4",
                "https://mega.nz/file/MopnlBKR#WsLcAg42V-A8Js9hXuGt6I1beBWvxFZdgyBeqjEceIw",
                "https://mega.nz/file/9xAUXYCJ#verTyURQJ4ZILSIibGpjej3-5mJurHUKN9_rNYmGdHA",
                "https://mega.nz/file/Zg4HRbDA#dPo9YfX-18MJi5vBNqnfCgqq9kduaM_CkXw2rSAefpg",
                "https://mega.nz/file/115gUTYD#NYr8twXGuCkgK4FlaVQfpxYTqHq_PLU7VuebbtdEE4Y",
                "https://mega.nz/file/stpXlbBY#mS01AfcYMESWxFvHzW9hm7hWN8HdHF40avqBYbzOc0U",
                "https://mega.nz/file/UsIWTZYQ#7qkQuDeF1H2y2wRDAmWi_C7bgoawMkBZuBvm0T87ZR4",
                "https://mega.nz/file/8k5gkBab#BGL4KUzHJe6bOq2jBc5Yr6PrMi9NVJIH70lSdGyjK68",
                "https://mega.nz/file/0xYCTB5b#jshfEeXDa1-7UbeSORlLhuoorAC_GTc0AiDrK4DkiNE",
                "https://mega.nz/file/osQRXLBI#GnsDrFwyi0Py9MOYrQHdX5Ln_OnPrP7vcIC2NbyfnBk",
                "https://mega.nz/file/Ykx2AbpY#UVqFwO5rfIVFaAQmFWLzlDun9nIfkT1ECKrjfi0MEN8",
                "https://mega.nz/file/ts5SkTaa#0DTXQKybwH2EHL9y2-FOxhqTrGN7e5D4v63ppk9Rlu8",
                "https://mega.nz/file/R1JQSSaa#UvDnmrFb4VW6nEnFP5nWVohj8SybKXlEFOjDCft_15M"
            ];
        }

        if(Auth::user()->amount === 0) {
            $files = [];
            $message = "Pay tuition fees to have access to all files";
        } elseif(Auth::user()->amount > 0 && Auth::user()->amount <= 30000) {
            $files = collect($files)->take(3);
            $message = "Complete tuition fees to get access to all files";
        } else {
            $files = collect($files)->take(count($files));
        }

        return view("verified.notes", compact(["message", "files", "payment_url"]));
    }
}
