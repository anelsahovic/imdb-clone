<a {{ $attributes }}>
    <div
        class="flex justify-center items-center space-x-2 py-2 px-3 my-3 border-2 border-white/40 rounded-2xl hover:border-primary hover:text-primary transition transition-duration-500">
        <div>
            <p class="font-bold text-lg"> {{ $slot }}</p>
        </div>
    </div>
</a>
