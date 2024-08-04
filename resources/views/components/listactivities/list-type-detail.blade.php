<div class="col-start-1 lg:col-start-2 col-end-2 lg:col-end-4">
    <x-listactivities.activities-template>
        @foreach($activity['paketactivities'] as $list)
            <x-listactivities.list-type-detail-item :$list>
                <x-listactivities.description :activity="$list['activity']" />
            </x-listactivities.list-type-detail-item>
        @endforeach
    </x-listactivities.activities-template>
</div>