@extends('layouts.app')
@section('title','チェックリスト')
@section('content')
    
<h1>
    持ち物リスト
</h1>
<p>
    解説    <a href="/download/" class="list-group-item list-group-item-action active">

</p>



{{-- <iframe href="storage/checklist/checklist.pdf" width="100%" height="100%">
   <p><b>表示されない時の表示</b>: <a href="storage/checklist/checklist.pdf">PDF をダウンロード</a>.</p>
</iframe> --}}
{{-- <p><a href="storage/checklist/checklist.pdf" download="checklist.pdf">ここからだうんrp-ど</a></p> --}}
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
        Cras justo odio
    </a>
    <a href="https://www.amazon.co.jp/2CS-志布志の自然水-非常災害備蓄用-PET×6本-5年保存水/dp/B007VZWZ7S/ref=sr_1_5?__mk_ja_JP=カタカナ&dchild=1&keywords=保存水&qid=1604450934&sr=8-5" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>

<h1>
    持ち物リスト
</h1>
<p>
    解説
</p>
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
        Cras justo odio
    </a>
    <a href="https://www.amazon.co.jp/2CS-志布志の自然水-非常災害備蓄用-PET×6本-5年保存水/dp/B007VZWZ7S/ref=sr_1_5?__mk_ja_JP=カタカナ&dchild=1&keywords=保存水&qid=1604450934&sr=8-5" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>

@endsection