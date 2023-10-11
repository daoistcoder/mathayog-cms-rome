const addQuestion = document.getElementById('add_question');
const form = document.getElementById('form');
const questionContainer = document.querySelector('.question-container');
const courseModuleLabel = document.getElementById('course_module_label');
const courseModule = document.getElementById('course_module');

courseModule.addEventListener('change', (e) => {
    e.preventDefault();
    courseModuleLabel.innerText = `${courseModule[courseModule.selectedIndex].text} Title`;
});

addQuestion.addEventListener('click', (e)=>{
    e.preventDefault();

    const questionDiv = createRow(questionContainer, 'question-item-wrapper');
    // const questionDiv = document.createElement('div');
    // questionDiv.classList.add('question-item-wrapper');
    // questionContainer.appendChild(questionDiv);
    const rowForm_1 = createRow(questionDiv, 'row-form');
    createLabel(rowForm_1, 'question', 'Question: ', 'question');
    createInput(rowForm_1, 'text', 'question', 'question-content');

    createLabel(rowForm_1, 'answer_key', 'Answer Key: ', 'label');
    createInput(rowForm_1, 'text', 'answer_key', 'answer-key');

    createLabel(rowForm_1, 'hint', 'Hint: ', 'label');
    createInput(rowForm_1, 'text', 'hint', 'input-hint');

    const rowForm_2 = createRow(questionDiv, 'row-form');
    createLabel(rowForm_2, 'choice_1', 'Choice 1: ', 'label');
    createInput(rowForm_2, 'text', 'choice_1', 'input-choice');

    createLabel(rowForm_2, 'feedback_1', 'Feedback 1: ', 'label');
    createInput(rowForm_2, 'text', 'feedback_1', 'feedback');

    createLabel(rowForm_2, 'choice_3', 'Choice 3: ', 'label');
    createInput(rowForm_2, 'text', 'choice_3', 'input-choice');

    createLabel(rowForm_2, 'feedback_3', 'Feedback 3: ', 'label');
    createInput(rowForm_2, 'text', 'feedback_3', 'feedback');

    const rowForm_3 = createRow(questionDiv, 'row-form');
    createLabel(rowForm_3, 'choice_2', 'Choice 2: ', 'label');
    createInput(rowForm_3, 'text', 'choice_2', 'input-choice');

    createLabel(rowForm_3, 'feedback_2', 'Feedback 2: ', 'label');
    createInput(rowForm_3, 'text', 'feedback_2', 'feedback');

    createLabel(rowForm_3, 'choice_4', 'Choice 4: ', 'label');
    createInput(rowForm_3, 'text', 'choice_4', 'input-choice');

    createLabel(rowForm_3, 'feedback_4', 'Feedback 4: ', 'label');
    createInput(rowForm_3, 'text', 'feedback_4', 'feedback');

});

function createRow(parent, c){
    const row = document.createElement('div');
    row.classList.add(c);
    row.style.padding = '10px';
    return parent.appendChild(row);
}

function createLabel(parent, f, content, c){
    const labelEl = document.createElement('label');
    labelEl.classList.add(c);
    labelEl.setAttribute('for', f );
    labelEl.innerText = content;
    return parent.appendChild(labelEl);
}

function createInput(parent, type, name, cl){
    const inputEl = document.createElement('input');
    inputEl.setAttribute('type', type);
    inputEl.setAttribute('name', name);
    inputEl.classList.add(cl);
    return parent.appendChild(inputEl);
}





// function createFormElements(){
//     const q_label = createLabel(form, 'question', 'Question: ', 'question');
// }
