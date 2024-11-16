<section class="text-center pt-6">
    <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

    <form action="" class="mt-6">
        <input type="text" placeholder="Web Developer..."
            class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
    </form>
    <x-forms.form action="/search" class="mt-6">
        <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
    </x-forms.form>
</section>

<section class="pt-10"></section>