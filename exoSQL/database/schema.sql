
/* Creation de la table des acteurs */

CREATE TABLE acteurs (
          codeacteur   text,
          nom	       text,
          prenom       text,
          birth	       date,
          site	       text
);	  



/* Creation de la table des films */

CREATE TABLE films (
          codefilm    text,
          titre       text,
          annee       int,
          codevedette text
);


