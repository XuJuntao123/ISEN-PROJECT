package com.example.christine.quizzapp;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.view.View;

/**
 * Created by Christine on 01/03/2018.
 */

public class ChooseDifficulty extends Activity implements View.OnClickListener{
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.choose_difficulty);

        findViewById(R.id.buttonEasy).setOnClickListener(this);
        findViewById(R.id.buttonHard).setOnClickListener(this);
        findViewById(R.id.buttonDecale).setOnClickListener(this);
    }

    @Override
    public void onClick(View view) {
        Bundle data = new Bundle();
        Intent quizz = new Intent(this, QuizzActivity.class);

        switch(view.getId()){
            case R.id.buttonEasy:
                //lancer quizz facile
                data.putInt("difficulty", 0);
                quizz.putExtras(data);
                startActivity(quizz);
                break;
            case R.id.buttonHard:
                //lancer quizz difficile
                data.putInt("difficulty", 1);
                quizz.putExtras(data);
                startActivity(quizz);
                break;
            case R.id.buttonDecale:
                //lancer quizz décalé
                data.putInt("difficulty", 2);
                quizz.putExtras(data);
                startActivity(quizz);
                break;
        }
    }
}
