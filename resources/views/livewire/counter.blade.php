<div>
    <span>{{ $count }}</span>
    <button wire:click="decrement">-</button>
    <button wire:click="increment">+</button>
    <p>Every button click makes an AJAX request to the server to handle reactivity.</p>
    <p>Will be affected by connection speed.</p>
    <p>Can be seen on the network tab.</p>
</div>
