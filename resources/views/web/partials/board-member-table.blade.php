<div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-xs">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr
                    class="border-b border-gray-200 bg-gray-50/80 text-xs font-bold uppercase tracking-wider text-gray-600">
                    <th scope="col" class="py-2 px-4 hidden sm:block text-center">Sr.No.</th>
                    <th scope="col" class="py-2 px-4">Name of member</th>
                    <th scope="col" class="py-2 px-4 text-end sm:text-center">View</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-sm">
                @forelse ($members as $index => $member)
                    <tr class="hover:bg-orange-50/30 transition-colors group member-row"
                        data-name="{{ strtolower($member->name) }}"
                        data-designation="{{ strtolower($member->designation ?? '') }}"
                        data-institution="{{ strtolower($member->institution ?? '') }}"
                        data-search="{{ strtolower($member->name . ' ' . ($member->designation ?? '') . ' ' . ($member->institution ?? '')) }}">
                        <td
                            class="py-2 px-4 hidden sm:block text-center font-bold text-gray-400 group-hover:text-ugcOrange font-mono text-sm sm:text-base row-sr-no">
                            {{ sprintf('%02d', ($startNumber ?? 1) + $index) }}
                        </td>
                        <td class="py-2 px-4">
                            <div class="font-bold text-gray-900 text-sm sm:text-base">
                                {{ $member->name }}
                            </div>
                            <div class="text-xs text-gray-500 mt-0.5 flex items-center gap-1.5 flex-wrap">
                                @if ($member->designation)
                                    <span
                                        class="text-ugcOrange font-semibold uppercase tracking-wider text-[11px]">{{ $member->designation }}</span>
                                    <span class="text-gray-300">•</span>
                                @endif
                                <span class="text-gray-600">{{ $member->institution }}</span>
                            </div>
                        </td>
                        <td class="py-2 px-4 text-center">
                            <button type="button" onclick="openMemberModal({{ $member->id }})"
                                class="inline-flex items-center justify-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-orange-50 hover:bg-ugcOrange text-ugcOrange hover:text-white border border-ugcOrange/30 text-xs font-bold transition-all shadow-2xs hover:shadow-xs cursor-pointer">
                                <svg class="size-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span>View</span>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-8 px-4 text-center text-gray-400 italic text-sm">
                            No members found.
                        </td>
                    </tr>
                @endforelse
                <tr class="no-filter-match hidden">
                    <td colspan="3" class="py-8 px-4 text-center text-gray-400 italic text-sm">
                        No members matching your filter.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
