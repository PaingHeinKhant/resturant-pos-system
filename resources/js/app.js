import './bootstrap';
import Swal from 'sweetalert2'
import {forEach} from "lodash";


// const activePage = window.location.pathname;


const plus =document.getElementById('plus');
const minus =document.getElementById('minus');
const display = document.getElementById('display');

var count = 0;
plus.onclick = function (){
    count++;
    console.log(count)
    display.value =count;
}

minus.onclick =function (){
    count--;
    display.value=count;
}

const navLink =document.querySelectorAll('.list-group a');

navLink.forEach( link =>{
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
    }
})



window.showToast = function (message){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: message
    })
}




