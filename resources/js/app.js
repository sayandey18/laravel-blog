import './bootstrap';
import './custom-script';
import Alpine from 'alpinejs';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

window.Alpine = Alpine;
Alpine.start();

const ckEditor = document.querySelector('#editor');
if (ckEditor) {
    ClassicEditor
    .create(ckEditor)
    .then(editor => {
        const form = document.querySelector('form');
        form.addEventListener('submit', () => {
            editor.updateSourceElement();
        });
    })
    .catch( error => { console.error( error ); } );
}
