create database fut_champions;
use fut_champions;

create table login(
    username varchar(255) primary key,
    password varchar(255)
    );
    
CREATE TABLE player(
    PlayerID int primary key AUTO_INCREMENT ,
    Name varchar(255) NOT NULL UNIQUE,
    ImagePlayer varchar(255) NOT NULL UNIQUE,
    Position varchar(255) NOT NULL,
    Rating int NOT NULL,
    ClubID int NOT NULL,
    NationalityID int
    );

CREATE TABLE club(
    ClubID int primary key AUTO_INCREMENT ,
    ClubName varchar(255)  NOT NULL UNIQUE,
    ClubImage varchar(255) NOT NULL UNIQUE
    );

CREATE TABLE nationality(
    NationalityID int primary key AUTO_INCREMENT,
    NationalityName varchar(255) NOT NULL UNIQUE,
    NationalityImage varchar(255) NOT NULL UNIQUE
    );


ALTER table player 
ADD constraint fk_NationalityID foreign key(NationalityID) REFERENCES nationality(NAtionalityID);

ALTER table player 
ADD constraint fk_ClubID foreign key(ClubID)  REFERENCES club(ClubID);


CREATE TABLE statiqtiques_GK(
    GK_ID int primary key AUTO_INCREMENT,
    Diving int NOT NULL,
	Handling  int NOT NULL,
	Kicking int NOT NULL,
	Reflexes int NOT NULL,
	Speed int NOT NULL,
	Positioning int NOT NULL
    );

CREATE TABLE statiqtiques_NormalPL(
    NormalPL_ID int primary key AUTO_INCREMENT,
    Pace int NOT NULL,
	Shooting  int NOT NULL,
	Passing int NOT NULL,
	Dribbling int NOT NULL,
	Deffensing int NOT NULL,
	Physical int NOT NULL
    );

ALTER TABLE player 
ADD COLUMN GKStatsID INT ,
ADD COLUMN PlayerStatsID INT ;

ALTER TABLE player 
ADD CONSTRAINT fk_GKStats FOREIGN KEY(GKStatsID) references statiqtiques_gk(GK_ID);

ALTER TABLE player 
ADD CONSTRAINT fk_PlayerStatsID FOREIGN KEY(PlayerStatsID) references statiqtiques_normalpl(NormalPL_ID);

//drop la constrainte gk_stats
ALTER TABLE player
DROP CONSTRAINT fk_GKStats;

//drop column GKSTATSID de table player
ALTER TABLE player
DROP COLUMN GKStatsID ;

--
ALTER TABLE player
DROP CONSTRAINT fk_PlayerStatsID;

ALTER TABLE player
DROP COLUMN PlayerStatsID;

--
ALTER TABLE statiqtiques_gk
ADD COLUMN PlayerID INT NOT NULL ;

--
ALTER TABLE statiqtiques_gk
ADD CONSTRAINT fk_PlayerID_GK FOREIGN KEY (PlayerID) REFERENCES player(PlayerID);

--
ALTER TABLE statiqtiques_NormalPL
ADD COLUMN PlayerID INT NOT NULL;

--
ALTER TABLE statiqtiques_NormalPL
ADD CONSTRAINT fk_PlayerID_NormalPL FOREIGN KEY (PlayerID) REFERENCES player(PlayerID);


