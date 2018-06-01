package com.example.christine.quizzapp;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.os.CountDownTimer;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.Reader;
import java.io.StringWriter;
import java.io.UnsupportedEncodingException;
import java.io.Writer;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

/**
 * Created by ISEN on 01/03/2018.
 */

public class QuizzActivity extends Activity implements View.OnClickListener {

    private int difficulty;

    private List<Question> questions = new ArrayList<Question>();

    private int currentQuestion;

    private TextView questionText;
    private Button button1;
    private Button button2;
    private Button button3;
    private Button button4;
    private TextView questionNumber;

    private TextView timer;
    private CountDownTimer countDownTimer;

    public int score;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.question_layout);
        this.difficulty = getIntent().getExtras().getInt("difficulty");
        loadQuestions();
        this.currentQuestion = 0;
        this.score = 0;
        questionText = findViewById(R.id.questionText);
        button1 = findViewById(R.id.answerButton1);
        button1.setOnClickListener(this);
        button2 = findViewById(R.id.answerButton2);
        button2.setOnClickListener(this);
        button3 = findViewById(R.id.answerButton3);
        button3.setOnClickListener(this);
        button4 = findViewById(R.id.answerButton4);
        button4.setOnClickListener(this);
        questionNumber = findViewById(R.id.questionNumber);
        initializeQuestion(0);
    }

    private void loadQuestions(){
        String tableName = null;
        switch (difficulty){
            case 0:
                tableName = "questionsFaciles";
                break;
            case 1:
                tableName = "questionsDifficiles";
                break;
            case 2:
                tableName = "questionsDecalees";
                break;
        }

        try
        {
            InputStream is = getResources().openRawResource(R.raw.bdd);
            Writer writer = new StringWriter();
            char[] buffer = new char[1024];
            try {
                Reader reader = new BufferedReader(new InputStreamReader(is, "UTF-8"));
                int n;
                while ((n = reader.read(buffer)) != -1) {
                    writer.write(buffer, 0, n);
                }
            } catch (UnsupportedEncodingException e) {
                e.printStackTrace();
            } catch (IOException e) {
                e.printStackTrace();
            } finally {
                is.close();
            }

            String jsonString = writer.toString();
            JSONObject jsonobject = new JSONObject(jsonString);
            JSONArray jarray = jsonobject.getJSONArray(tableName);
            for(int i=0;i<jarray.length();i++)
            {
                JSONObject jb =(JSONObject) jarray.get(i);
                String question = jb.getString("question");
                String bonneReponse = jb.getString("bonneReponse");
                String reponseA = jb.getString("reponseA");
                String reponseB = jb.getString("reponseB");
                String reponseC = jb.getString("reponseC");

                List<Answer> shuffledAnswers = new ArrayList<Answer>();

                Answer answer1 = new Answer(bonneReponse, true);
                Answer answer2 = new Answer(reponseA, false);
                Answer answer3 = new Answer(reponseB, false);
                Answer answer4 = new Answer(reponseC, false);

                shuffledAnswers.add(answer1);
                shuffledAnswers.add(answer2);
                shuffledAnswers.add(answer3);
                shuffledAnswers.add(answer4);

                Collections.shuffle(shuffledAnswers);

                Question quest = new Question(question, shuffledAnswers.get(0), shuffledAnswers.get(1), shuffledAnswers.get(2), shuffledAnswers.get(3));
                questions.add(quest);
            }
            Collections.shuffle(questions);

        } catch (IOException e) {
            e.printStackTrace();
        } catch (JSONException e) {
            e.printStackTrace();
        }
    }

    private void initializeQuestion(int questionId){
        questionText.setText(questions.get(questionId).getQuestionText());
        button1.setText(questions.get(questionId).getAnswers().get(0).getAnswerText());
        button2.setText(questions.get(questionId).getAnswers().get(1).getAnswerText());
        button3.setText(questions.get(questionId).getAnswers().get(2).getAnswerText());
        button4.setText(questions.get(questionId).getAnswers().get(3).getAnswerText());
        questionNumber.setText("Question "+(this.currentQuestion+1)+"/10");
        startTimer();
    }

    @Override
    public void onClick(View view) {
        switch(view.getId()){
            case R.id.answerButton1 :
                if(questions.get(currentQuestion).getAnswers().get(0).isCorrect()){
                    correctAnswer();
                } else {
                    cancelTimer();
                    nextQuestion();
                }
                break;
            case R.id.answerButton2 :
                if(questions.get(currentQuestion).getAnswers().get(1).isCorrect()){
                    correctAnswer();
                } else {
                    cancelTimer();
                    nextQuestion();
                }
                break;
            case R.id.answerButton3 :
                if(questions.get(currentQuestion).getAnswers().get(2).isCorrect()){
                    correctAnswer();
                } else {
                    cancelTimer();
                    nextQuestion();
                }
                break;
            case R.id.answerButton4 :
                if(questions.get(currentQuestion).getAnswers().get(3).isCorrect()){
                    correctAnswer();
                } else {
                    cancelTimer();
                    nextQuestion();
                }
                break;
        }
    }

    private void correctAnswer(){
        score += 1;
        cancelTimer();
        nextQuestion();
    }

    private void nextQuestion(){
        currentQuestion += 1;
        if(currentQuestion > 9){
            endQuizz();
        } else {
            initializeQuestion(currentQuestion);
        }
    }

    private void endQuizz(){
        Bundle data = new Bundle();
        Intent end = new Intent(this, EndActivity.class);
        data.putInt("score",this.score);
        end.putExtras(data);
        startActivity(end);
    }

    private void startTimer(){
        this.timer = findViewById(R.id.timerText);
        timer.setText("25");

        countDownTimer = new CountDownTimer(26000, 1000) {
            @Override
            public void onTick(long millisUntilFinished) {
                timer.setText(String.valueOf(millisUntilFinished / 1000));
            }

            @Override
            public void onFinish() {
                timer.setText("0");
                nextQuestion();
            }
        }.start();
    }

    private void cancelTimer(){
        if(countDownTimer != null){
            countDownTimer.cancel();
            countDownTimer = null;
        }
    }
}
