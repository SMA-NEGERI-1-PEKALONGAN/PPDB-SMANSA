<style>
/* --- FORMATTING HTML DARI TEXT EDITOR (RICH TEXT) --- */
.chat-editor-content {
    word-break: break-word;
}

.chat-editor-content h1,
.chat-editor-content h2,
.chat-editor-content h3 {
    font-weight: 700;
    color: inherit;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    line-height: 1.3;
}

.chat-editor-content h1 {
    font-size: 1.25rem;
}

.chat-editor-content h2 {
    font-size: 1.125rem;
}

.chat-editor-content h3 {
    font-size: 1rem;
}

.chat-editor-content p {
    margin-bottom: 0.5rem;
}

.chat-editor-content p:last-child {
    margin-bottom: 0;
}

.chat-editor-content strong,
.chat-editor-content b {
    font-weight: 700;
}

.chat-editor-content em,
.chat-editor-content i {
    font-style: italic;
}

.chat-editor-content ul {
    list-style-type: disc;
    padding-left: 1.25rem;
    margin-bottom: 0.5rem;
}

.chat-editor-content ol {
    list-style-type: decimal;
    padding-left: 1.25rem;
    margin-bottom: 0.5rem;
}

/* Menyesuaikan gambar dari editor agar rapi & melengkung */
.chat-editor-content img {
    max-width: 100%;
    height: auto;
    border-radius: 0.75rem;
    margin: 0.5rem 0;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

/* Mengatasi class bawaan Quill Editor */
.chat-editor-content .ql-align-justify {
    text-align: justify;
}

.chat-editor-content .ql-align-center {
    text-align: center;
}

.chat-editor-content .ql-align-right {
    text-align: right;
}
</style>
<!-- ==========================================
     WIDGET CHATBOT CUSTOM (INTERAKTIF & AI TYPING)
=========================================== -->
<div class="fixed bottom-6 right-6 z-[100] flex flex-col items-end">

    <!-- Jendela Chatbot -->
    <div id="chatbot-window"
        class="hidden opacity-0 translate-y-10 transition-all duration-300 transform origin-bottom-right mb-4 w-[calc(100vw-3rem)] sm:w-[380px] bg-white/90 dark:bg-slate-800/90 backdrop-blur-2xl rounded-3xl shadow-2xl border border-white/50 dark:border-slate-700/50 overflow-hidden flex flex-col h-[500px] max-h-[80vh]">

        <!-- Chat Header -->
        <div
            class="bg-gradient-to-r from-primary-600 to-accent-600 p-4 flex items-center justify-between shadow-md shrink-0">
            <div class="flex items-center gap-3">
                <div class="relative">
                    <div
                        class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center text-white backdrop-blur-sm border border-white/30">
                        <i class="fa-solid fa-robot text-xl"></i>
                    </div>
                    <span
                        class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 border-2 border-primary-600 rounded-full"></span>
                </div>
                <div>
                    <h4 class="text-white font-bold leading-none mb-1">AI Assitant SPMB</h4>
                    <p class="text-primary-100 text-[10px] uppercase tracking-wider font-semibold" id="bot-status">
                        Online - Siap Membantu</p>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <button onclick="clearChatHistory()" title="Akhiri Sesi & Hapus Obrolan"
                    class="w-8 h-8 rounded-full bg-white/10 hover:bg-rose-500 hover:text-white text-white flex items-center justify-center transition-colors">
                    <i class="fa-solid fa-trash-can text-sm"></i>
                </button>
                <button onclick="toggleChatbot()" title="Tutup Chat"
                    class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors">
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
            </div>
        </div>

        <!-- Chat Body (Area Pesan) -->
        <div class="flex-1 p-4 overflow-y-auto custom-scroll space-y-4 bg-slate-50/50 dark:bg-slate-900/50"
            id="chat-messages">
            <!-- Pesan akan di-generate oleh JavaScript di sini -->
        </div>

        <!-- Typing Indicator (Awalnya Sembunyi) -->
        <div id="typing-indicator" class="hidden px-4 pb-4 bg-slate-50/50 dark:bg-slate-900/50">
            <div class="flex items-start gap-3">
                <div
                    class="w-8 h-8 rounded-full bg-primary-100 dark:bg-primary-900/50 text-primary-600 dark:text-primary-400 flex items-center justify-center shrink-0 mt-1">
                    <i class="fa-solid fa-robot text-sm"></i>
                </div>
                <div
                    class="bg-white dark:bg-slate-700 p-3.5 rounded-2xl rounded-tl-none shadow-sm border border-slate-100 dark:border-slate-600 w-20 flex items-center justify-center gap-1.5 h-10">
                    <div class="w-2 h-2 bg-slate-400 dark:bg-slate-300 rounded-full animate-bounce"
                        style="animation-delay: 0s;"></div>
                    <div class="w-2 h-2 bg-slate-400 dark:bg-slate-300 rounded-full animate-bounce"
                        style="animation-delay: 0.2s;"></div>
                    <div class="w-2 h-2 bg-slate-400 dark:bg-slate-300 rounded-full animate-bounce"
                        style="animation-delay: 0.4s;"></div>
                </div>
            </div>
        </div>

        <!-- Chat Footer (Input Area) -->
        <div
            class="p-3 sm:p-4 bg-white dark:bg-slate-800 border-t border-slate-100 dark:border-slate-700 shrink-0 relative">
            <form id="chat-form" class="relative flex items-center">

                <input type="text" id="chat-input" placeholder="Tanya sesuatu di sini..."
                    class="w-full pl-4 pr-12 py-3 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-600 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent outline-none text-sm text-slate-700 dark:text-slate-200 transition-all disabled:opacity-50 disabled:cursor-not-allowed"
                    autocomplete="off">

                <button type="submit" id="chat-submit-btn" disabled
                    class="absolute right-2 w-8 h-8 bg-primary-600 hover:bg-primary-700 text-white rounded-lg flex items-center justify-center transition-transform hover:scale-105 shadow-md disabled:bg-slate-300 dark:disabled:bg-slate-600 disabled:text-slate-400 dark:disabled:text-slate-400 disabled:shadow-none disabled:hover:scale-100 disabled:cursor-not-allowed">
                    <i class="fa-solid fa-paper-plane text-xs ml-[-2px]"></i>
                </button>

            </form>
        </div>
    </div>

    <!-- Tooltip & Launcher Button (Sama seperti sebelumnya) -->
    <div id="chatbot-tooltip"
        class="absolute right-16 bottom-2 bg-white dark:bg-slate-800 px-4 py-2 rounded-xl shadow-lg border border-slate-100 dark:border-slate-700 text-sm font-semibold text-slate-700 dark:text-slate-200 whitespace-nowrap animate-bounce flex items-center gap-2">
        Tanya AI Assistant <span class="flex h-2 w-2 relative"><span
                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span><span
                class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span></span>
        <div
            class="absolute -right-2 top-1/2 -translate-y-1/2 border-y-8 border-y-transparent border-l-8 border-l-white dark:border-l-slate-800">
        </div>
    </div>

    <button id="chatbot-launcher" onclick="toggleChatbot()"
        class="w-14 h-14 bg-gradient-to-br from-primary-600 to-accent-600 hover:from-primary-700 hover:to-accent-700 text-white rounded-full flex items-center justify-center shadow-[0_0_20px_rgba(59,130,246,0.5)] transition-transform hover:scale-110 relative group z-50">
        <i class="fa-solid fa-comment-dots text-2xl group-[.active]:hidden transition-all duration-300"></i>
        <i class="fa-solid fa-xmark text-2xl hidden group-[.active]:block transition-all duration-300"></i>
    </button>
</div>

<!-- modal -->
<div id="clear-chat-modal" class="hidden fixed inset-0 z-[200] flex items-center justify-center p-4">
    <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity" onclick="closeClearModal()"></div>

    <div class="relative bg-white dark:bg-slate-800 rounded-3xl shadow-2xl w-full max-w-sm p-6 text-center transform scale-95 opacity-0 transition-all duration-300 border border-slate-100 dark:border-slate-700"
        id="clear-chat-modal-content">
        <div
            class="w-16 h-16 bg-rose-100 dark:bg-rose-900/40 rounded-full flex items-center justify-center mx-auto mb-4 text-rose-500 dark:text-rose-400 shadow-inner">
            <i class="fa-solid fa-triangle-exclamation text-2xl animate-pulse"></i>
        </div>

        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Akhiri Sesi?</h3>
        <p class="text-sm text-slate-500 dark:text-slate-400 mb-6 leading-relaxed">Semua riwayat obrolan Anda dengan AI
            Assistant akan dihapus secara permanen dari perangkat ini.</p>

        <div class="flex gap-3">
            <button onclick="closeClearModal()"
                class="flex-1 px-4 py-3 bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-700 dark:text-slate-200 font-bold rounded-xl transition-colors">Batal</button>
            <button onclick="confirmClearHistory()"
                class="flex-1 px-4 py-3 bg-rose-500 hover:bg-rose-600 text-white font-bold rounded-xl transition-all hover:shadow-[0_0_15px_rgba(244,63,94,0.5)]">Ya,
                Hapus</button>
        </div>
    </div>
</div>