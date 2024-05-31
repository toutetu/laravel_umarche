@props([
    "message" => "初期値です。",
    'content' => "本文初期値です。",
    'title' => "タイトル初期値です。"
])

<div class="w-1/4 p-2  border-red-500 shadow-md ">
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
    
</div>