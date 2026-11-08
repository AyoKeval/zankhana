@extends('layouts.web')

@section('styles')
    <style>
        /* Ensure the success animation works even without a library */
        #formSuccess:not(.hidden) {
            display: block;
            animation: fadeIn 0.5s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection

@section('content')
    <main class="max-w-7xl mx-auto w-full px-4 py-8 md:py-12 font-sans">

        <!-- Breadcrumb & Header -->
        <div class="mb-8 border-b border-gray-200 pb-4">
            <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-ugcOrange mb-1">
                <a href="{{ url('/home') }}" class="hover:underline">Home</a>
                <span>/</span>
                <span>Contact Us</span>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Contact Us</h1>
            <p class="text-gray-600 text-sm mt-1">Get in touch with the publisher of Zankhana International E-Journal.</p>
        </div>

        <!-- Contact Cards Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-4">

            <!-- Publisher Card (From private/text/CONTECT US.txt) -->
            <div
                class="bg-white rounded-2xl border border-gray-200 shadow-sm p-4 sm:p-6 hover:border-ugcOrange/30 transition-all flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4 border-b border-gray-100 pb-4">
                        <h3 class="text-xs font-black uppercase tracking-widest text-ugcOrange">
                            Publisher & Office
                        </h3>
                        <span class="text-xs font-semibold text-gray-500 bg-gray-100 px-2.5 py-0.5 rounded-full">
                            Madhav Publication
                        </span>
                    </div>

                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-ugcOrange/10 text-ugcOrange flex items-center justify-center font-black text-xl shrink-0">
                            M
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 leading-snug">Madhav Publication</h4>
                            <p class="text-xs font-medium text-gray-500">Official Publisher of Zankhana International
                                E-Journal</p>
                        </div>
                    </div>

                    <div class="space-y-3 text-sm text-gray-700">
                        <div>
                            <p class="text-[10px] font-bold uppercase text-gray-400 tracking-wider mb-0.5">Postal Address
                            </p>
                            <p class="text-gray-800 font-medium">
                                "Manas", Panch Pada, Shivaji Nagar,<br>
                                Botad, State: Gujarat, India
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-100 mt-4">
                    <p class="text-[10px] font-bold uppercase text-gray-400 tracking-wider mb-1">Official Email</p>
                    <a href="mailto:zankhanaejournal@gmail.com"
                        class="inline-flex items-center gap-2 text-sm font-bold text-ugcOrange hover:underline transition-colors">
                        <span>✉</span> zankhanaejournal@gmail.com
                    </a>
                </div>
            </div>

            <!-- Journal Key Info Banner -->
            <div class="bg-gray-50 rounded-2xl border border-gray-200 p-4 sm:p-6">
                <h3 class="text-xs font-black uppercase tracking-widest text-gray-500 mb-3">
                    Zankhana International E-Journal Key Information
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs sm:text-sm">
                    <div class="bg-white p-3 rounded-xl border border-gray-200">
                        <span class="text-gray-400 text-[10px] uppercase font-bold block">ISSN</span>
                        <span class="font-bold text-gray-900">2350-0271</span>
                    </div>
                    <div class="bg-white p-3 rounded-xl border border-gray-200">
                        <span class="text-gray-400 text-[10px] uppercase font-bold block">Frequency</span>
                        <span class="font-bold text-gray-900">Monthly (12/Year)</span>
                    </div>
                    <div class="bg-white p-3 rounded-xl border border-gray-200">
                        <span class="text-gray-400 text-[10px] uppercase font-bold block">Format</span>
                        <span class="font-bold text-gray-900">Online Mode</span>
                    </div>
                    <div class="bg-white p-3 rounded-xl border border-gray-200">
                        <span class="text-gray-400 text-[10px] uppercase font-bold block">Languages</span>
                        <span class="font-bold text-gray-900">English, Hindi, Gujarati, Sanskrit</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Contact & Inquiry Form -->
        <div class="max-w-7xl mx-auto bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">

            <div class="bg-gradient-to-r from-orange-500 to-ugcOrange px-6 py-6 text-white text-center">
                <h2 class="text-xl md:text-2xl font-bold mb-1">Send Us a Message</h2>
                <p class="text-white/80 text-xs md:text-sm">Have a question regarding manuscript submission, publication, or
                    policies? Write to us.</p>
            </div>

            <form id="formContent" class="max-w-2xl mx-auto p-4 md:p-8 space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div class="space-y-1">
                        <label class="text-xs font-bold uppercase text-gray-600 tracking-wide">Full Name *</label>
                        <input type="text" id="fName" required
                            class="w-full px-4 py-2.5 text-sm rounded-xl border border-gray-300 focus:border-ugcOrange focus:ring-2 focus:ring-ugcOrange/20 outline-none transition"
                            placeholder="e.g. Dr. Rajesh Kumar">
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold uppercase text-gray-600 tracking-wide">Email Address *</label>
                        <input type="email" id="fEmail" required
                            class="w-full px-4 py-2.5 text-sm rounded-xl border border-gray-300 focus:border-ugcOrange focus:ring-2 focus:ring-ugcOrange/20 outline-none transition"
                            placeholder="you@university.edu">
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold uppercase text-gray-600 tracking-wide">Phone (Optional)</label>
                        <input type="tel" id="fPhone"
                            class="w-full px-4 py-2.5 text-sm rounded-xl border border-gray-300 focus:border-ugcOrange focus:ring-2 focus:ring-ugcOrange/20 outline-none transition"
                            placeholder="+91 98765 43210">
                    </div>

                    <div class="space-y-1">
                        <label class="text-xs font-bold uppercase text-gray-600 tracking-wide">Inquiry Topic</label>
                        <select id="fGenre"
                            class="w-full px-4 py-2.5 text-sm rounded-xl border border-gray-300 focus:border-ugcOrange focus:ring-2 focus:ring-ugcOrange/20 outline-none bg-white transition">
                            <option value="">Select Topic</option>
                            <option value="Manuscript Submission">Manuscript Submission Query</option>
                            <option value="Peer Review Status">Peer Review Status</option>
                            <option value="Publication & Certificate">Publication & Certificate</option>
                            <option value="Copyright & Permissions">Copyright & Permissions</option>
                            <option value="Editorial Board Membership">Editorial Board Membership</option>
                            <option value="Other">Other Inquiry</option>
                        </select>
                    </div>

                    <div class="md:col-span-2 space-y-1">
                        <label class="text-xs font-bold uppercase text-gray-600 tracking-wide">Your Message *</label>
                        <textarea id="fMessage" rows="4" required
                            class="w-full px-4 py-2.5 text-sm rounded-xl border border-gray-300 focus:border-ugcOrange focus:ring-2 focus:ring-ugcOrange/20 outline-none transition resize-none"
                            placeholder="Please describe your query or message in detail..."></textarea>
                    </div>
                </div>

                <button type="button" onclick="submitForm()"
                    class="w-full bg-ugcOrange hover:bg-ugcDark text-white font-bold py-3.5 rounded-xl transition shadow-md active:scale-[0.99] flex items-center justify-center gap-2">
                    <span>✉</span> Send Inquiry
                </button>
            </form>

            <div id="formSuccess" class="hidden p-8 md:p-14 text-center">
                <div
                    class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                    ✓
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Message Sent Successfully!</h3>
                <p class="text-sm text-gray-600 mb-6 max-w-md mx-auto">
                    Thank you for reaching out to Zankhana International E-Journal. Our team will review your query and
                    respond shortly.
                </p>
                <button onclick="resetForm()" class="text-ugcOrange text-sm font-bold hover:underline">
                    Send another inquiry →
                </button>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        function submitForm() {
            const btn = event.target;
            const name = document.getElementById('fName').value.trim();
            const email = document.getElementById('fEmail').value.trim();
            const message = document.getElementById('fMessage').value.trim();

            if (!name || !email || !message) {
                alert("Please fill in your name, email, and message.");
                return;
            }

            btn.innerText = "Sending...";
            btn.disabled = true;

            const formData = {
                name: name,
                email: email,
                phone: document.getElementById('fPhone').value.trim(),
                genre: document.getElementById('fGenre').value,
                message: message
            };

            fetch(`${BASE_URL}/contact/submit`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify(formData)
                })
                .then(res => res.json())
                .then(data => {
                    document.getElementById('formContent').classList.add('hidden');
                    document.getElementById('formSuccess').classList.remove('hidden');
                })
                .catch(err => {
                    alert("Submission failed. Please try again or email us directly at zankhanaejournal@gmail.com.");
                    btn.innerText = "✉ Send Inquiry";
                    btn.disabled = false;
                });
        }

        function resetForm() {
            document.getElementById('formContent').reset();
            document.getElementById('formContent').classList.remove('hidden');
            document.getElementById('formSuccess').classList.add('hidden');
        }
    </script>
@endsection
