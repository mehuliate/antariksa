<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Recommendation
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('tasks.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="recommendation" class="block font-medium text-sm text-gray-700">Rekomendasi</label>
                            <textarea id="about" name="recommendation" rows="4" class="form-input rounded-md shadow-sm mt-1 block w-full">{{ old('recommendation', '') }}</textarea>
                            @error('recommendation')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Jenis Rekomendasi" class="block font-medium text-sm text-gray-700">Jenis Rekomendasi</label>
                            <select id="country" name="typeOfRecommendation" autocomplete="country" class="mt-1 block w-full py-2 px-3 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($types as $type)
                                <option value="{{ $type->id}}">{{$type->name . ' (' . $type->description.')' }}</option>
                                @endforeach
                            </select>
                            @error('typeOfRecommendation')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="kegiatan" class="block font-medium text-sm text-gray-700">Unit in charge</label>
                            <select id="section" name="section" autocomplete="country" class="mt-1 block w-full py-2 px-3 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($sections as $section)
                                <option value="{{ $section->id}}">{{$section->name}}</option>
                                @endforeach
                            </select>
                            @error('section')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Unit Pendukung" class="block font-medium text-sm text-gray-700">Unit Pendukung</label>
                            <select id="pendukung" name="pendukung" autocomplete="country" class="mt-1 block w-full py-2 px-3 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($sections as $section)
                                <option value="{{ $section->id}}">{{$section->name}}</option>
                                @endforeach
                            </select>
                            @error('pendukung')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Deadline</label>
                            <input type="text" name="description" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('description', '') }}" />
                            @error('description')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="kegiatan" class="block font-medium text-sm text-gray-700">Status</label>
                            <select id="status" name="status" autocomplete="country" class="mt-1 block w-full py-2 px-3 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach($statuses as $status)
                                <option value="{{ $status->id}}">{{$status->label}}</option>
                                @endforeach
                            </select>
                            @error('status')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="recommendation" class="block font-medium text-sm text-gray-700">Catatan Kepatuhan Internal</label>
                            <textarea id="about" name="recommendation" rows="3" class="form-input rounded-md shadow-sm mt-1 block w-full">{{ old('recommendation', '') }}</textarea>
                            @error('recommendation')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>