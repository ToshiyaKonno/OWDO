@extends('layouts.app')
@section('content')

<main role="main">    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="">
        <div class="bg-warning">
            <h1 class="display-3 logo"> </h1>
            {{-- <img src="{{ asset('../image/OWDO.png')}}"> --}}
            <div style="text-align:center;"> 
<br>
<img src="../image/OWDO.png" width="500px" height="500px" padding="10px" 30px alt="logo">
</div>
            <!-- <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p> -->
            <p>OWDOとは[Open when disaster occurred]の頭文字を取っています。[災害の時に開くアプリケーション]という意味です。スマートフォン向けのアプリケーションです。ダウンロードは<a href="https://www.apple.com/jp/app-store/" target="_blank">こちら</a>から</p><br>
            <p>こちらのページでは災害時に役立つライフハックの共有や、おすすめの防災アイテム、家族とのお約束の事柄を共有するサイトです。
            <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
            {{-- <p><a class="btn btn-primary btn-lg" href="https://www.apple.com/jp/app-store/" role="button">詳しくみる &raquo;</a></p> --}}
        </div>
    </div>
    
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <!-- <h2>Heading</h2> -->
                <h2>ライフハック</h2>
                <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
                <p>災害時に役立つライフハックを掲載しています。皆さんのライフハックを共有しましょう！</p>
                <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
                <p><a class="btn btn-secondary" href="lifehack" role="button">詳しくみる &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <!-- <h2>Heading</h2> -->
                <h2>チェックリスト</h2>
                <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
                <p>非常持出しの準備は出来ていますか？おすすめ等を紹介しています。</p>
                <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
                <p><a class="btn btn-secondary" href="checklist" role="button">詳しくみる &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <!-- <h2>Heading</h2> -->
                <h2>お約束事項</h2>
                <!-- <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
                <p>家族で決めたお約束事項を共有したり、書き方の例を挙げています。</p>
                <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
                <p><a class="btn btn-secondary" href="yakusoku" role="button">詳しくみる &raquo</a></p>
            </div>
        </div>
        
        <hr>
        
    </div> <!-- /container -->
    
</main>
@endsection