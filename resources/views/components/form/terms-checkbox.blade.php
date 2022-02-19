<x-form.element model="terms">
    <div class="flex place-items-center py-2">
        <input type="checkbox" name="terms" required /> <label for="terms" class="text-regular-hard text-opacity-60 text-base">I agree with <a class="text-blue-robins-egg" href="{{ route('terms') }}">Terms of Use</a> and <a class="text-blue-robins-egg" href="{{ route('privacy') }}">Privacy Policy</a></label>
    </div>
</x-form.element>
