@extends('layouts.app')
@section('title','チェックリスト')
@section('content')
    
<h1>
    持ち物リスト
</h1>
 <div style="text-align:center;"> 
<br>
<img src="../image/checklist.jpg" width="1000px" height="1200px" padding="10px" 30px alt="checklist">
</div>
<p>
    非常持ち物のチェックリストの例とおすすめの商品を紹介していきます    <a href="/download/" class="list-group-item list-group-item-action active">
チェックリストダウンロード
</p></a>

{{-- <iframe href="storage/checklist/checklist.pdf" width="100%" height="100%">
   <p><b>表示されない時の表示</b>: <a href="storage/checklist/checklist.pdf">PDF をダウンロード</a>.</p>
</iframe> --}}
{{-- <p><a href="storage/checklist/checklist.pdf" download="checklist.pdf">ここからだうんrp-ど</a></p> --}}
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
        非常食など
    </a>
    <a href="https://www.amazon.co.jp/2CS-志布志の自然水-非常災害備蓄用-PET×6本-5年保存水/dp/B007VZWZ7S/ref=sr_1_5?__mk_ja_JP=カタカナ&dchild=1&keywords=保存水&qid=1604450934&sr=8-5" class="list-group-item list-group-item-action">保存水</a>
    <a href="https://www.amazon.co.jp/ホテイフーズ-やきとり-3缶×6種類-ガーリックペッパー-柚子こしょう/dp/B08D3FTNNB/ref=sr_1_21?__mk_ja_JP=カタカナ&dchild=1&keywords=非常食&qid=1604450979&sr=8-21" class="list-group-item list-group-item-action">缶詰</a>
    <a href="#" class="list-group-item list-group-item-action">乾パン</a>

</div>


</p>
<p>
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
        電灯など
    </a>
    <a href="" class="list-group-item list-group-item-action">懐中電灯</a>
    <a href="#" class="list-group-item list-group-item-action">電池</a>
    <a href="#" class="list-group-item list-group-item-action">ラジオ</a>
    <a href="#" class="list-group-item list-group-item-action disabled">手回し発電機</a>
</div></p>

<p>
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
        電灯など
    </a>
    <a href="" class="list-group-item list-group-item-action">懐中電灯</a>
    <a href="#" class="list-group-item list-group-item-action">電池</a>
    <a href="#" class="list-group-item list-group-item-action">ラジオ</a>
    <a href="#" class="list-group-item list-group-item-action disabled">手回し発電機</a>
</div></p>

<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
        電灯など
    </a>
    <a href="" class="list-group-item list-group-item-action">懐中電灯</a>
    <a href="#" class="list-group-item list-group-item-action">電池</a>
    <a href="#" class="list-group-item list-group-item-action">ラジオ</a>
    <a href="#" class="list-group-item list-group-item-action disabled">手回し発電機</a>
</div></p>

@endsection