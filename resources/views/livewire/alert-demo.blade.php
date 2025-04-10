<div>
    <!-- Buttons to trigger the alerts -->
    <div class="flex space-x-4 mt-4">
        <button
            wire:click="showSuccessAlert"
            class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-colors"
        >
            Show Success Alert
        </button>

        <button
            wire:click="showErrorAlert"
            class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition-colors"
        >
            Show Error Alert
        </button>
    </div>
</div>
