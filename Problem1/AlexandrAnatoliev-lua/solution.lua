answer = 0
for i = 1,999 do
  if (i % 3 == 0) or (i % 5 == 0) then
    answer = answer + i
  end
end
print("Answer = " .. answer)
