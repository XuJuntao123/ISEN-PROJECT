package com.example.christine.quizzapp;

/**
 * Created by ISEN on 01/03/2018.
 */

public class Answer {

    private String answerText;
    private boolean correct;

    public Answer(String answerText, boolean correct) {
        this.answerText = answerText;
        this.correct = correct;
    }

    public boolean isCorrect(){
        return correct;
    }

    public String getAnswerText(){
        return answerText;
    }
}
