// Scheduler Array for Tasks
let schedulerTasks = JSON.parse(localStorage.getItem("schedulerTasks")) || [];

// DOM Elements
const form = document.getElementById("scheduler-form");
const taskNameInput = document.getElementById("task-name");
const taskDateInput = document.getElementById("task-date");
const taskNotesInput = document.getElementById("task-notes");
const timeline = document.getElementById("scheduler-maintenance-timeline");

// Initialize UI with Stored Tasks
document.addEventListener("DOMContentLoaded", updateSchedulerTimeline);

// Add Task Event Listener
form.addEventListener("submit", (e) => {
  e.preventDefault();

  const task = {
    id: Date.now(),
    name: taskNameInput.value,
    date: taskDateInput.value,
    notes: taskNotesInput.value.trim() || "No additional notes",
  };

  schedulerTasks.push(task);
  localStorage.setItem("schedulerTasks", JSON.stringify(schedulerTasks));
  form.reset();
  updateSchedulerTimeline();
});

// Update Timeline
function updateSchedulerTimeline() {
  timeline.innerHTML = ""; // Clear existing tasks

  if (schedulerTasks.length === 0) {
    timeline.innerHTML = "<p>No upcoming maintenance tasks found.</p>";
    return;
  }

  schedulerTasks.forEach((task) => {
    const taskElement = document.createElement("div");
    taskElement.className = "task-item";

    taskElement.innerHTML = `
      <h3>${task.name}</h3>
      <p><strong>Date:</strong> ${task.date}</p>
      <p>${task.notes}</p>
      <button class="delete-btn" data-id="${task.id}">Delete</button>
    `;

    timeline.appendChild(taskElement);
  });

  // Add Delete Event Listeners
  document.querySelectorAll(".delete-btn").forEach((button) => {
    button.addEventListener("click", deleteTask);
  });
}

// Delete Task
function deleteTask(e) {
  const taskId = parseInt(e.target.getAttribute("data-id"));
  schedulerTasks = schedulerTasks.filter((task) => task.id !== taskId);
  localStorage.setItem("schedulerTasks", JSON.stringify(schedulerTasks));
  updateSchedulerTimeline();
}
