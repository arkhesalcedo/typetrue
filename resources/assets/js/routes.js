import VueRouter from 'vue-router';
import Gender from './components/questions/Gender';
import Age from './components/questions/Age';
import Diagnosed from './components/questions/Diagnosed';
import Smoker from './components/questions/Smoker';
import A1c from './components/questions/A1c';
import Height from './components/questions/Height';
import Weight from './components/questions/Weight';
import Conditions from './components/questions/Conditions';
import Info from './components/questions/Info';
import Products from './components/questions/Products';
import Sorry from './components/questions/Sorry';
import Thanks from './components/questions/Thanks';

const routes = [
    { path: '/', component: Gender, name: 'home' },
    { path: '/gender', component: Gender, name: 'gender' },
    { path: '/age', component: Age, name: 'age' },
    { path: '/diagnosed', component: Diagnosed, name: 'diagnosed' },
    { path: '/smoker', component: Smoker, name: 'smoker' },
    { path: '/a1c', component: A1c, name: 'a1c' },
    { path: '/height', component: Height, name: 'height' },
    { path: '/weight', component: Weight, name: 'weight' },
    { path: '/conditions', component: Conditions, name: 'conditions' },
    { path: '/info', component: Info, name: 'info' },
    { path: '/product', component: Products, name: 'products' },
    { path: '/sorry', component: Sorry, name: 'sorry' },
    { path: '/thanks', component: Thanks, name: 'thanks' },
];

const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;
