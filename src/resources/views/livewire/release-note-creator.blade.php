<div class="border border-gray-200 m-1">
    <div class="flex flex-col md:flex-row p-2 md:space-x-1 md:space-y-0 space-y-1 w-full">
        <div class="flex-auto">
            <label class="block text-sm text-gray-00" for="cus_name">Realease Version</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 " id="cus_name" name="cus_name" type="text"
                wire:model='readme.semver_version' placeholder="Release Version (Semver if possible)" aria-label="Name">
        </div>
        <div class="flex-auto">
            <label class="block text-sm text-gray-00" for="cus_name">Release Date</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 date" id="cus_name" name="cus_name" type="text"
                wire:model='readme.release_date' placeholder="Release Date" aria-label="Name">
        </div>
    </div>
    <div class="flex flex-col md:flex-row p-2 md:space-x-1 md:space-y-0 space-y-1 w-full">
        <div class="flex-auto">
            <label class="block text-sm text-gray-00" for="cus_name">Realease Short Description</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 " id="cus_name" name="cus_name" type="text"
                wire:model='readme.description' placeholder="Release Short Description" aria-label="Name">
        </div>

    </div>
    <hr />
    <div class="m-2" wire:ignore>
        <input id="release_notes" name="content" value="{{ $value }}">
        <trix-editor input="release_notes"></trix-editor>
    </div>

    <hr />
    <div class="flex flex-col md:flex-row p-2 md:space-x-1 md:space-y-0 space-y-1 w-full">
        <div class="flex-auto">
            <label class="block text-sm text-gray-00" for="cus_name">Notify (Comma Seperated Emails)</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 " id="cus_name" name="cus_name" type="text"
                wire:model='readme.notify' placeholder="Users To Notify" aria-label="Name">
        </div>
        <div class="flex-auto">
            <section class="container mx-auto mt-2 p-2">
                <label for="checkbox" class="relative flex-inline items-center isolate p-4 rounded-2xl">
                    <input id="checkbox" type="checkbox"
                        class="relative peer z-20 text-purple-600 rounded-md focus:ring-0"
                        wire:model='readme.notify_all' />
                    <span class="ml-2 relative z-20">Notify all users</span>
                    <div
                        class="absolute inset-0 bg-white peer-checked:bg-purple-50 peer-checked:border-purple-300 z-10 border rounded-2xl">
                    </div>
                </label>
            </section>

        </div>

    </div>
    <hr />
    <div class="flex flex-col md:flex-row p-2 md:space-x-1 md:space-y-0 space-y-1 w-full">

        <button wire:click='saveReadMe'
            class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300 w-full">Save
            Read
            Me</button>
    </div>

    <script>
        document.addEventListener('livewire:load', function() {
            flatpickr(".date");
            var trixEditor = document.getElementById("release_notes")
            addEventListener("trix-change", function(event) {
                var element = event.target
                var html = element.value
                @this.set('readme.release_notes', html)
            })
        })
    </script>
    <style>
        input:checked+svg {
            display: block;
        }

        ol li {
            list-style: decimal;
            margin-left: 1em;
        }

        ul li {
            list-style: disc;
            margin-left: 1em;
        }

    </style>
</div>
