package com.example.christine.quizzapp;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

/**
 * Created by ISEN on 10/03/2018.
 */

public class EndActivity extends Activity implements View.OnClickListener{

    private int score;
    private TextView scoreText;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_score);
        this.score = getIntent().getExtras().getInt("score");
        this.scoreText = findViewById(R.id.scoreText);
        scoreText.setText(this.score+"/10");

        findViewById(R.id.replayButton).setOnClickListener(this);
        findViewById(R.id.quitButton).setOnClickListener(this);
    }

    @Override
    public void onClick(View view) {
        Bundle data = new Bundle();

        switch (view.getId()){
            case R.id.replayButton:
                Intent quizz = new Intent(this, ChooseDifficulty.class);
                quizz.putExtras(data);
                startActivity(quizz);
                break;
            case R.id.quitButton:
                Intent menu = new Intent(this, MainActivity.class);
                menu.putExtras(data);
                startActivity(menu);
                break;
        }

    }
}
