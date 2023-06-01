import axios from 'axios'
import { createApp } from 'vue'

async function getAgendaData() {
	try {
		return axios.get('/sessionsdata')
			.then(response => {
				console.info(response.data);
				return response.data;
			})
			.catch(error => {
				console.error(error);
				return null;
			})
	} catch (error) {
		return null;
	}
}

async function init() {
	let sessionData = await getAgendaData();
	// if (sessionData) {
	// 	console.log(sessionData);
	// 	const elem = document.getElementById("agenda");
	// 	elem.innerHTML = JSON.stringify(sessionData);
	// }

	createApp({
		data() {
			return {
				count: 0
			}
		}
	}).mount('#agenda')
}

init();