<div class="grid grid-cols-[500px_auto]">
    <ul class="space-y-2 max-h-screen overflow-y-auto p-4">
        @foreach($vacancies as $vacancy)
            <li wire:key="{{$vacancy['id']}}">
                <a
                    x-class="{}"
                    class="bg-gray-200
                    border
                    border-transparent
                    hover:border-blue-300
                active:border-blue-300
                 p-2
                rounded-lg block
                {{ $selectedVacancyId == $vacancy['id'] ? 'bg-blue-100 border-blue-300' : '' }}"
                   wire:click.prevent="show({{$vacancy['id']}})"
                   href="#">{{$vacancy['title']}}</a>
            </li>
        @endforeach
    </ul>
    <div class="p-8">

        @empty($vacancyDetails)
            Select vacancy
        @endempty
        <p>{{ $vacancyDetails }}</p>
    </div>
</div>
