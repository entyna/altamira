<div class="w-full max-w-xs mx-auto">
    <input {{ $attributes }} 
        class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
    
    @error($attributes['name'])
    <p>{{$message}}</p>
    @enderror
    </div>