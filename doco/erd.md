
# ERDs - Entity Relationship Diagrams

## Major Entities

```mermaid
erDiagram

    YEAR        ||--o{ COMPETITION : ""
    COMPETITION ||--o{ SESSION : ""
    SESSION     ||--o{ SECTION : ""
    SECTION     |o--o{ ROUTINE : ""

    ITEM        ||--o{ ROUTINE : ""

    REGION    ||--o{ CLUB   : ""
    YEAR      ||--o{ COHORT : ""
    CLUB      ||--o{ COHORT : ""
    AGE_GROUP ||--o{ COHORT : ""
    DIVISION  |o--o{ COHORT : ""

    COHORT    ||--o{ TEAM    : ""
    TEAM_RANK |o--o{ TEAM    : ""
    TEAM      ||--o{ ROUTINE : ""

```

## Competition, Session, Section

Any given competition, session, or section 
could link to one or more objects of
any or all of these types: 

- Items 
- Regions 
- Age_Groups 
- Divisions 
- Team_Ranks 

If a Competition is linked to any one of these objects, then its Sessions and Sections are also implicitly linked to that object.

If a Session is linked to any one of these objects, then its Sections are also implicitly linked to that object.

```mermaid
erDiagram

    Competition }o--o{ Item      : ""
    Competition }o--o{ Region    : ""
    Competition }o--o{ Age_Group : ""
    Competition }o--o{ Division  : ""
    Competition }o--o{ Team_Rank : ""

    Session }o--o{ Item      : ""
    Session }o--o{ Region    : ""
    Session }o--o{ Age_Group : ""
    Session }o--o{ Division  : ""
    Session }o--o{ Team_Rank : ""

    Section }o--o{ Item      : ""
    Section }o--o{ Region    : ""
    Section }o--o{ Age_Group : ""
    Section }o--o{ Division  : ""
    Section }o--o{ Team_Rank : ""

```
