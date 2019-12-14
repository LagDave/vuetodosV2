require('./bootstrap');

import Vue from 'vue';
import TodoList from './components/TodoList';
import NavBar from './components/NavBar';
import CreateTodo from './components/CreateTodo';

import EventBus from './util/EventBus';

const app = new Vue({
    el: "#app",
    components: {
        TodoList,
        NavBar,
        CreateTodo
    },
    data() {
        return {
            todos: [],
            todo: { content: "" }
        }
    },
    methods: {
        fetchTodos() {
            fetch("/allTodos")
                .then(res => res.json())
                .then(res => {
                    this.todos = res;
                })
                .catch(err => console.log(err));
        },
        saveTodo(todoContent) {

            this.todo.content = todoContent;
            fetch('/todos', {
                method: "post",
                body: JSON.stringify(this.todo),
                headers: {
                    "content-type": "application/json"
                }
            })
                .then(res => res.json())
                .then(data => {
                    this.todo.content = "";
                    this.fetchTodos();
                })
        }
    },
    created() {
        this.fetchTodos();
        EventBus.$on('save-todo', this.saveTodo);
    }
})