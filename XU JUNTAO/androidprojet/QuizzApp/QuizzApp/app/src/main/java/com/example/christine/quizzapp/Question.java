package com.example.christine.quizzapp;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by ISEN on 01/03/2018.
 */

public class Question {

    private String questionText;

    private Answer answer1;
    private Answer answer2;
    private Answer answer3;
    private Answer answer4;

    public Question(String questionText, Answer answer1, Answer answer2, Answer answer3, Answer answer4) {
        this.questionText = questionText;
        this.answer1 = answer1;
        this.answer2 = answer2;
        this.answer3 = answer3;
        this.answer4 = answer4;
    }

    public List<Answer> getAnswers(){
        List<Answer> answers = new ArrayList<Answer>();
        answers.add(answer1);
        answers.add(answer2);
        answers.add(answer3);
        answers.add(answer4);
        return answers;
    }

    public String getQuestionText(){
        return this.questionText;
    }

    public void setAnswers(Answer answer1, Answer answer2, Answer answer3, Answer answer4){
        this.answer1 = answer1;
        this.answer2 = answer2;
        this.answer3 = answer3;
        this.answer4 = answer4;
    }
}
