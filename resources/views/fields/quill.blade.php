<div x-data="quill">
    <div class="ql-editor" :id="$id('quill')" style="height: auto;">{!! $value ?? '' !!}</div>

    <x-moonshine::form.textarea
        :attributes="$element->attributes()->merge([
            'class' => 'ql-textarea',
            'name' => $element->name(),
            'style' => 'display: none;'
        ])->except('x-bind:id')"
    >{!! $value ?? '' !!}</x-moonshine::form.textarea>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('quill', () => ({
            textarea: null,
            editor: null,

            init() {
                this.textarea = this.$root.querySelector('.ql-textarea')
                this.editor = this.$root.querySelector('.ql-editor')

                const t = this

                this.$nextTick(function() {
                    let quill = new Quill(`#${t.editor.id}`, {
                        theme: 'snow'
                    });

                    quill.on('text-change', () => {
                        t.textarea.value = t.editor.innerHTML || '';
                        t.textarea.dispatchEvent(new Event('change'));
                    });
                })
            },
        }))
    })
</script>

<style>
    .ql-container, .ql-toolbar {
        background-color: white!important;
        color: black!important;
    }
</style>
