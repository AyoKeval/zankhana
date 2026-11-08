<div onclick="openMemberModal({{ $member->id }})"
    class="group p-5 rounded-xl border border-gray-200 hover:border-ugcOrange/30 hover:bg-ugcOrange/5 transition-all duration-300 relative overflow-hidden cursor-pointer">

    <span
        class="absolute -right-2 -top-2 text-4xl font-black text-gray-100 group-hover:text-ugcOrange/25 transition-colors pointer-events-none select-none">
        {{ sprintf('%02d', $iteration ?? 1) }}
    </span>

    <p class="text-base font-bold text-gray-900 mb-1 relative z-10">
        {{ $member->name }}
    </p>

    @if ($member->designation)
        <p class="text-xs font-black uppercase text-ugcOrange tracking-tighter mb-1 relative z-10">
            {{ $member->designation }}
        </p>
    @endif

    <p class="text-sm text-gray-500 leading-tight relative z-10 italic">
        {{ $member->institution }}
    </p>
</div>
