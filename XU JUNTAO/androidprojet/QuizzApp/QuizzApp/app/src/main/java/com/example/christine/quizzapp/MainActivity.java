package com.example.christine.quizzapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_intro_quizz);

        findViewById(R.id.playButton).setOnClickListener(this);
    }

    public Intent startQuizz() {
        Bundle data = new Bundle();
        Intent quizz = new Intent(this, ChooseDifficulty.class);
        quizz.putExtras(data);
        return quizz;
    }

    @Override
    public void onClick(View view) {
        Intent intent = startQuizz();
        startActivity(intent);
    }
}
