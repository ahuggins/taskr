new Vue({
	el: '.tasks',

	data: {
		tasks: [
			{content: 'Do something', complete: false}
		],
		newTask: ''
	}

	methods: {
		addTask: function(e) {
			e.preventDefault();

			this.tasks.push({
				content: this.newTask,
				complete: false
			});

			this.newTask = '';
		}
	}
});