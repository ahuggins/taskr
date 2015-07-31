Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

new Vue({
	el: '.tasks',

	data: {
		newTask: ''
	},

	computed: {
		completions: function() {
			return this.tasks.filter(function(task) {
				return task.complete;
			});
		},

		remaining: function() {
			return this.tasks.filter(function(task) {
				return ! task.complete;
			});	
		}
	},

	filters: {
		inProcess: function(tasks) {
			return tasks.filter(function(task) {
				return ! task.complete;
			});
		},
		complete: function(tasks) {
			return tasks.filter(function(task) {
				return task.complete;
			});
		}
	},

	ready: function () {

		this.setListId();
		this.fetchTasks();
	},

	methods: {

		setListId: function() {
			var pathArray = window.location.pathname.split( '/' );
			this.$set('list_id', pathArray[2]);
		},

		fetchTasks: function() {
			this.$http.post('/api/tasks', {list_id: this.list_id}, function(tasks) {
				this.$set('tasks', tasks);
			});
		},

		deleteTask: function(task) {
			this.$http.post('/api/delete-task', task);
		},

		addTask: function(e) {
			e.preventDefault();

			if ( ! this.newTask ) return;

			var data = {
				content: this.newTask,
				complete: false,
				list_id: this.list_id
			};

			this.$http.post('/api/create-task', data, function(task) {
				this.tasks.push(task);
			});

			this.newTask = '';
		},

		removeTask: function(task) {
			this.tasks.$remove(task);
			this.deleteTask(task);
		},

		editTask: function(task) {
			this.removeTask(task);
			this.newTask = task.content;
			this.$$.newTask.focus();
		},

		toggleComplete: function(task) {
			task.complete = ! task.complete;

			this.$http.post('/api/complete-task', task);
		},

		completeAll: function() {

			this.$http.post('/api/complete-all', {list_id: this.list_id});

			this.tasks.forEach(function(task) {
				task.complete = true;
			});
		},

		clearCompleted: function() {
			
			this.$http.post('/api/delete-complete', {list_id: this.list_id});

			this.tasks = this.tasks.filter(function(task) {
				return ! task.complete;
			})
		}
	}
});