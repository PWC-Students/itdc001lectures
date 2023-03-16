function Pokemon(name, level) {
  //properties
  this.name = name;
  this.level = level;
  this.health = 3 * level;
  this.attack = level;
  this.speed = Math.floor(Math.random() * 100); // Generate a random speed value between 0-99

  //methods
  this.tackle = function (target) {
    console.log(this.name + ' tackled ' + target.name);
    const damage = Math.floor(Math.random() * 11) + 10; // Generate a random damage value between 10-20
    console.log(
      target.name + "'s health is now reduced to " + (target.health - damage)
    );

    target.health = target.health - damage;

    if (target.health <= 0) {
      target.faint();
    }
  };

  this.specialSkill = function (target) {
    console.log(this.name + ' used Special Skill on ' + target.name);
    const damage = Math.floor(Math.random() * 31) + 10; // Generate a random damage value between 10-40
    console.log(
      target.name + "'s health is now reduced to " + (target.health - damage)
    );

    target.health = target.health - damage;

    if (target.health <= 0) {
      target.faint();
    }
  };

  this.faint = function () {
    console.log(this.name + ' ' + 'fainted. :(');
  };
}

function Player(name) {
  this.name = name;
  this.pokemon = null;
}

Player.prototype.choosePokemon = function () {
  console.log(this.name + ', choose your Pokemon:');
  for (let i = 0; i < arrayPokemons.length; i++) {
    console.log(
      i +
        1 +
        '. ' +
        arrayPokemons[i].name +
        ' - Level: ' +
        arrayPokemons[i].level +
        ' Health: ' +
        arrayPokemons[i].health
    );
  }
  const choice = parseInt(prompt('Enter your choice (1-12):'));
  this.pokemon = arrayPokemons[choice - 1];
};

Player.prototype.attack = function (target) {
  if (this.pokemon.speed > target.pokemon.speed) {
    console.log(this.name + "'s turn!");
    const choice = parseInt(
      prompt('Choose your action:\n1. Tackle\n2. Special Skill')
    );
    switch (choice) {
      case 1:
        this.pokemon.tackle(target.pokemon);
        break;
      case 2:
        this.pokemon.specialSkill(target.pokemon);
        break;
      default:
        console.log('Invalid choice.');
    }
    if (target.pokemon.health > 0) {
      console.log(target.name + "'s turn!");
      const targetChoice = Math.floor(Math.random() * 2) + 1; // Generate a random choice for the target
      switch (targetChoice) {
        case 1:
          target.pokemon.tackle(this.pokemon);
          break;
        case 2:
          target.pokemon.specialSkill(this.pokemon);
          break;
      }
    }
  } else {
    console.log(target.name + "'s turn!");
    const targetChoice = Math.floor(Math.random() * 2) + 1; // Generate a random choice for the target
    switch (targetChoice) {
      case 1:
        target.pokemon.tackle(this.pokemon);
        break;
      case 2:
        target.pokemon.specialSkill(this.pokemon);
        break;
    }
    if (this.pokemon.health > 0) {
      console.log(this.name + "'s turn!");
      const choice = parseInt(
        prompt('Choose your action:\n1. Tackle\n2. Special Skill')
      );
      switch (choice) {
        case 1:
          this.pokemon.tackle(target.pokemon);
          break;
        case 2:
          this.pokemon.specialSkill(target.pokemon);
          break;
        default:
          console.log('Invalid choice.');
      }
    }
  }
};
