<div>
    <div>
        <x-table :headers="$headers" :rows="$pullRequests" striped @row-click="alert($event.detail.name)" />
    </div>

    <div class="py-10">
        {{ $pullRequests->links(data: ['scrollTo' => false]) }}
    </div>
</div>
