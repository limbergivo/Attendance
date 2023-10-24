# RECEPT ATTENDANCE APP

## Models
1. Players Model
2. Playerlist Model
3. Attendance Model

## 1.Player Model
- Name
- Age
- Position

### 1.1 Player Class Variablen & Functies
 1. Maak Player.php class aan 
 2. Maak de volgende private variablen: Name, Age, Position
 3. De volgende functies gaan we aan maken: GetName, GetAge, GetPosition -> Dit zijn onze Getters
 4. De volgende functies voegen we ook toe aan de class: SetName, SetAge,SetPosition -> Dit zijn Setters 

## Voorbeeld Getters & Setters:
```
private $name;
public function setName( $value )    
    {
        $this->name = $value;    
}

public function getName()    
{                
return $this->name;    
}
```

---

## 2.Playerlist Model
- Player

## 3. Attendance Model
- Player
- Match
- Training
- Date