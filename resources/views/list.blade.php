<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>List Champions</h2>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Champions</th>
            <th>Classes</th>
            <th>Release Date</th>
            <th><img src="https://www.unrankedsmurfs.com/storage/blogposts/big-changes/be.png?fbclid=IwAR1TX2YC4KUPare-ou4CGGPbnZKfBdLp_mnGzqVSWDgl1fgU2ru1hfRaihU" width="30px" height="30px">Blue Essense</th>
            <th><img src="https://gamehag.com/img/rewards/logo/670-riot-points-eune.png?fbclid=IwAR0Z577u2iBCYSWRgyVtt9-VMtrUVpmZFK-N_r2MW--5FdtWeXGz5SNf1fE" width="30px" height="30px">RP</th>
            <th>Regions</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $champion)
         <tr>
             <td>
                 <div><img src="{{$champion->thumbnail}}" width="40px" height="40px">{{$champion->name}}</div>
                 <div>({{$champion->nickName}})</div>
               </td>
             <td>
                 @switch($champion->classes)
                     @case(0)
                     <img src="https://i.pinimg.com/236x/e7/56/af/e756af6831e68f0a16e7d779ae91b395--tanks-legends.jpg?fbclid=IwAR0_Iv12n_omq7e4qSJYvgEjaniy1FcQdS7ees4gfUMEZp_2CsQVnqRFenI" width="40px">
                     @break
                     @case(1)
                     <img src="https://i.pinimg.com/236x/40/67/cc/4067cc5f43674dde6648bc8395845ce4--legends-icons.jpg?fbclid=IwAR0rLvKp4MYNhMrIOnc06GlkI1-uIIgfuTN4bDvaaiOABrVHhR3V1b3a8dE" width="40px">
                     @break
                     @case(2)
                     <img src="https://i.pinimg.com/236x/ba/fe/f5/bafef5ca81dff1914e292d8f9f0e3cf8--league-of-legends-tattoo-game-tattoos.jpg?fbclid=IwAR0wVmNkEtbpvAIbIaLIUDXeKR7jPe9_DuQPs1O2eDx5TqIz6yI4HwuxdV4" width="40px">
                     @break
                     @case(3)
                     <img src="https://i.pinimg.com/236x/88/14/bd/8814bd6b458d8b4527ad942ad2e530bc--legends-icons.jpg?fbclid=IwAR01IdID6VIcJ7lzNwcW6RnCP47XyIeoGwrPk10-Ba3chH0XFhNAQ62ewTY" width="40px">
                     @break
                     @case(4)
                     <img src="https://i.pinimg.com/236x/76/76/8c/76768c20c6012f00c8b0c282ee6a6f03--legends-icons.jpg?fbclid=IwAR064EL436IFGHNVCUrbGaDJU7NiX7AdZDWZPvYwkktL71StDUrbqo83DbU" width="40px">
                     @break
                     @case(5)
                     <img src="https://i.pinimg.com/236x/99/a2/86/99a286f37f013fd9258c893dee036497--support-league-of-legends-jinx.jpg?fbclid=IwAR1dXvhHPYma4mAVnuNxjWoctf0Y8g6bUtUDaFyWZ-NU5V8hR6ch6TLc4nQ" width="40px">
                     @break
                 @endswitch
                 {{\App\Enums\ChampionClass::getDescription($champion->classes)}}
             </td>
             <td>{{$champion->release_year}}</td>
             <td>{{$champion->blue_essense}}</td>
             <td>{{$champion->price}}</td>
             <td>
                 @switch($champion->regions)
                     @case(0)
                     <img src="/imgs/Bilgewater_Crest_icon.png" width="40px">
                     @break
                     @case(1)
                     <img src="/imgs/Demacia_Crest_icon.png" width="40px">
                     @break
                     @case(2)
                     <img src="/imgs/Bilgewater_Crest_icon.png" width="40px">
                     @break
                     @case(3)
                     <img src="https://universe.leagueoflegends.com/images/void_crest_icon.png?fbclid=IwAR2n-ZFO5Ccnz_dEtr3PAjp7TWShcq2upxmUiUBdkffTuXD-lKHUZFkGNOw" width="40px">
                     @break
                     @case(4)
                     <img src="https://universe.leagueoflegends.com/images/iona_crest_icon.png?fbclid=IwAR39_3JZ4fgo5Af_tP9uBYxRp_G3p6XSDm8k146rQWcCu9eYJLd1poqgewE" width="40px">
                     @break
                     @case(5)
                     <img src="https://universe.leagueoflegends.com/images/ixtal_crest_icon.png?fbclid=IwAR1ddgXBoNSsm858Y9YDe6NNMXgoPFPQp7NPM6aKU8nFXsRMTMPZsfAz20M" width="40px">
                     @break
                     @case(6)
                     <img src="/imgs/Noxus_Crest_icon.png" width="40px">
                     @break
                     @case(7)
                     <img src="https://universe.leagueoflegends.com/images/piltover_crest_icon.png?fbclid=IwAR0hYOFmltbsxRS4eUsfHHtIHFTz9f88DFv2zZndNdIBsJeODQLd4xyuO0k" width="40px">
                     @break
                     @case(8)
                     <img src="https://universe.leagueoflegends.com/images/shadow_isles_crest_icon.png?fbclid=IwAR1dXvhHPYma4mAVnuNxjWoctf0Y8g6bUtUDaFyWZ-NU5V8hR6ch6TLc4nQ" width="40px">
                     @break
                     @case(9)
                     <img src="https://universe.leagueoflegends.com/images/shurima_crest_icon.png?fbclid=IwAR0_Iv12n_omq7e4qSJYvgEjaniy1FcQdS7ees4gfUMEZp_2CsQVnqRFenI" width="40px">
                     @break
                     @case(10)
                     <img src="https://universe.leagueoflegends.com/images/mt_targon_crest_icon.png?fbclid=IwAR3K9XrA_q2oLR4oVE1XMDi5617LVg_td3fsCI2mCIhhf2ac8WBjdLM56bY" width="40px">
                     @break
                     @case(11)
                     <img src="https://universe.leagueoflegends.com/images/zaun_crest_icon.png?fbclid=IwAR3K9XrA_q2oLR4oVE1XMDi5617LVg_td3fsCI2mCIhhf2ac8WBjdLM56bY" width="40px">
                     @break
                     @case(12)
                     <img src="https://universe.leagueoflegends.com/images/bandle_city_crest_icon.png?fbclid=IwAR3jNAGeJFNfnhHlITW6OB23UW0ihp8k7W1zLHfd_SO8rXixhkz8cqtdweM" width="40px">
                     @break
                 @endswitch
                 {{\App\Enums\ChampionRegions::getDescription($champion->regions)}}
             </td>
             <td>
                 <a href="/edit/{{$champion->id}}">
                     <button class="btn btn-primary">Edit</button>
                 </a>
                 <a href="/delete/{{$champion->id}}" onclick="return confirm('bạn chắc chắn muốn xóa chứ?')">
                     <button class="btn btn-danger">Delete</button>
                 </a>
                 </td>
         </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
