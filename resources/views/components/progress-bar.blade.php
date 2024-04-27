<div class="progress">
    <div class="progress-bar bg-white text-secondary" role="progressbar" style="width: {{ $publishedCount }}%;" aria-valuenow="{{ $publishedCount }}" aria-valuemin="0" aria-valuemax="100">{{ $publishedCount }}%</div>
    <div class="progress-bar bg-dark text-white" role="progressbar" style="width: {{ $unpublishedCount }}%;" aria-valuenow="{{ $unpublishedCount }}" aria-valuemin="0" aria-valuemax="100">{{ $unpublishedCount }}%</div>
</div>