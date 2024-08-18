<div {{ $attributes->merge(['class' => "flex flex-row items-center justify-center gap-5"]) }}>
    <x-border-circle :bgColor="'bg-inherit'"><x-svg.instagram-colorful /></x-border-circle>
    <x-border-circle :bgColor="'bg-inherit'"><x-svg.whatsapp-colorful /></x-border-circle>
    <a href=""><x-border-circle :bgColor="'bg-inherit'"><x-svg.tiktok-colorful /></x-border-circle></a>
    <x-border-circle :bgColor="'bg-inherit'"><x-svg.youtube-colorful /></x-border-circle>
</div>