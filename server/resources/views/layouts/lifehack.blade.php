<div class="row">
    <div>
        {{-- altは表示されなかった時の説明 --}}
        <img src="{{ url($lifehack->img_path) }}" alt="" class="square-img" >
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">  
            <h3>
                <a href="/lifehack/{{ $lifehack->id }}">{{ $lifehack->title }}</a>
                
            </h3>
        </div>

        
    </div>
</div>