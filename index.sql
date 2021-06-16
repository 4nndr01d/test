select t1.*
from prodacts t1
where
(
   select count(*)
   from prodacts as t2
   where t1.Id_collection = t2.Id_collection and t1.Date < t2.Date
) <= 2
GROUP BY CONCAT(LEAST(t1.Id_collection, t1.Date), 
              GREATEST(t1.Id_collection, t1.Date))