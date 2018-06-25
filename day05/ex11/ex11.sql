SELECT UPPER(user_card.last_name) as NAME, user_card.first_name, subscription.price FROM db_psprawka.user_card
INNER JOIN db_psprawka.member ON member.id_member = user_card.id_user
INNER JOIN db_psprawka.subscription ON subscription.id_sub = member.id_sub
WHERE subscription.price > 42
ORDER BY last_name, first_name;
