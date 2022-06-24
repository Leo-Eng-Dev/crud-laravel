require('./bootstrap')

// window.Vue = require('vue')
window.axios = require('axios')

// import Vue from 'vue'
import axios from 'axios'


const urlOne = 'https://jsonplaceholder.typicode.com/posts';

let el = document.getElementById('api');
console.log(el);
el.addEventListener('click', () => {

    console.log('Clicou!!!');

    axios.get('api/api-exemplo', { params = params })
        .then(response => {

        console.log('RESPONSE', response);

        response.json().then(data => {

            console.log('DATA', data);
            let showData = document.getElementById('apiShow');
            console.log(showData);
            showData.innerHTML = data;

        });

        console.log('OK', response.url);

    }).catch(error => {
    console.log('Wooops...Something went wrong!!!', error);
    });
});
